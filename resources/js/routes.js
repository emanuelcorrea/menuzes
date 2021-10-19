const routes = {
    "section.visible": {
        "uri": "admin\/section\/visible\/{id}"
    },
    "item.visible": {
        "uri": "admin\/item\/visible\/{id}"
    },
    "section.index": {
        "uri": "admin\/section"
    },
    "section.create": {
        "uri": "admin\/section\/create"
    },
    "section.store": {
        "uri": "admin\/section"
    },
    "section.show": {
        "uri": "admin\/section\/{section}"
    },
    "section.edit": {
        "uri": "admin\/section\/{section}\/edit"
    },
    "section.update": {
        "uri": "admin\/section\/{section}"
    },
    "section.destroy": {
        "uri": "admin\/section\/{section}"
    },
    "item.index": {
        "uri": "admin\/item"
    },
    "item.create": {
        "uri": "admin\/item\/create"
    },
    "item.store": {
        "uri": "admin\/item"
    },
    "item.show": {
        "uri": "admin\/item\/{item}"
    },
    "item.edit": {
        "uri": "admin\/item\/{item}\/edit"
    },
    "item.update": {
        "uri": "admin\/item\/{item}"
    },
    "item.destroy": {
        "uri": "admin\/item\/{item}"
    }
};

const route = (routeName, params = [], absolute = true) => {
  const _route = routes[routeName];
  if (_route == null) throw "Requested route doesn't exist";

  let uri = _route.uri;

  const matches = uri.match(/{[\w]+\??}/g) || [];
  const optionals = uri.match(/{[\w]+\?}/g) || [];

  const requiredParametersCount = matches.length - optionals.length;

  if (params instanceof Array) {
    if (params.length < requiredParametersCount) throw "Missing parameters";

    for (let i = 0; i < requiredParametersCount; i++)
      uri = uri.replace(/{[\w]+\??}/, params.shift());

    for (let i = 0; i < params.length; i++)
      uri += (i ? "&" : "?") + params[i] + "=" + params[i];
  } else if (params instanceof Object) {
    let extraParams = matches.reduce((ac, match) => {
      let key = match.substring(1, match.length - 1);
      let isOptional = key.endsWith("?");
      if (params.hasOwnProperty(key.replace("?", ""))) {
        uri = uri.replace(new RegExp(match.replace("?", "\\?"), "g"), params[key.replace("?", "")]);
        delete ac[key.replace("?", "")];
      } else if (isOptional) {
          uri = uri.replace("/" + new RegExp(match, "g"), "");
      }
      return ac;
    }, params);

    Object.keys(extraParams).forEach((key, i) => {
      uri += (i ? "&" : "?") + key + "=" + extraParams[key];
    });
  }

  if (optionals.length > 0) {
    for (let i in optionals) {
      uri = uri.replace("/" + optionals[i], "");
    }
  }

  if (uri.includes("}")) throw "Missing parameters";

  if (absolute && process.env.MIX_APP_URL)
    return process.env.MIX_APP_URL + "/" + uri;
  return "/" + uri;
};

export { route };
