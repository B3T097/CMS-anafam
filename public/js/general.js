//Convertimos el titulo en cadena sin espacios ni caracteres especiales
function URLAmigable(value) {
    let normalize = (function () {
        let from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
            to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
            mapping = {};

        for (let i = 0, j = from.length; i < j; i++)
            mapping[from.charAt(i)] = to.charAt(i);

        return function (str) {
            let ret = [];
            for (let i = 0, j = str.length; i < j; i++) {
                let c = str.charAt(i);
                if (mapping.hasOwnProperty(str.charAt(i)))
                    ret.push(mapping[c]);
                else
                    ret.push(c);
            }
            return ret.join('').replace(/[^-A-Za-z0-9]+/g, '-').toLowerCase();
        }
    })();

    let clean = normalize(value.trim());

    let ultimoCaracter = clean.substring(clean.length, clean.length - 1);
    let primerCaracter = clean.substring(0, 1);

    if (ultimoCaracter == '-') {
        clean = clean.substring(0, clean.length - 1);
    }
    if (primerCaracter == '-') {
        clean = clean.substring(1, clean.length);
    }

    return clean;
}