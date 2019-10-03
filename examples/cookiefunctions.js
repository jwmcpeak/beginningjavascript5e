function setCookie(name, value, path, expires) {
    value = escape(value);

    if (!expires) {
        var now = new Date();
        now.setMonth(now.getMonth() + 6);
        expires = now.toUTCString();
    }

    if (path) {
        path = ";Path=" + path;
    }

    document.cookie = name + "=" + value + ";expires=" + expires + path;
}

function getCookieValue(name) {
    var value = document.cookie;
    var cookieStartsAt = value.indexOf(" " + name + "=");

    if (cookieStartsAt == -1) {
        cookieStartsAt = value.indexOf(name + "=");
    }

    if (cookieStartsAt == -1) {
        value = null;
    } else {
        cookieStartsAt = value.indexOf("=", cookieStartsAt) + 1;

        var cookieEndsAt = value.indexOf(";", cookieStartsAt);

        if (cookieEndsAt == -1) {
            cookieEndsAt = value.length;
        }

        value = unescape(value.substring(cookieStartsAt,
            cookieEndsAt));
    }

    return value;
}