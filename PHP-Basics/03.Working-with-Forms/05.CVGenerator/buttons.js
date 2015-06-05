document.addEventListener("DOMContentLoaded", function () {

    var progLangId = 2;

    document.getElementById("add-prog-lng").onclick = function (e) {
        e.preventDefault();
        var wrapper = document.createElement("div");
        wrapper.setAttribute("id", "prog-lang-" + progLangId);
        wrapper.innerHTML = "<input type=\"text\" name=\"prog-lang[]\"/>\n\
                            <select name=\"prog-lang-level[]\">" +
                "<option>Beginner</option>\n\
                                <option>Programmer</option>\n\
                                <option>Ninja</option>\n\
                            </select>";
        document.getElementById("prog-lng-field").appendChild(wrapper);
        progLangId++;
    };

    document.getElementById("rmv-prog-lng").onclick = function (e) {
        e.preventDefault();
        var lastLanguageId = document.getElementById("prog-lng-field").lastChild.id;
        if (lastLanguageId !== "prog-lang-1") {
            document.getElementById("prog-lng-field").lastChild.remove();
        }
    };

    document.getElementById("add-lng").onclick = function (e) {
        e.preventDefault();
        var wrapper = document.createElement("div");
        wrapper.setAttribute("id", "language-" + progLangId);
        wrapper.innerHTML = "<input type=\"text\" name=\"language[]\"/>\n\
                            <select name=\"level-c[]\">\n\
                                <option value=\"\" disabled selected>-Comprehension-</option>\n\
                                <option>beginner</option>\n\
                                <option>advanced</option>\n\
                                <option>intermediate</option>\n\
                            </select>\n\
                            <select name=\"level-r[]\">\n\
                                <option value=\"\" disabled selected>-Reading-</option>\n\
                                <option>beginner</option>\n\
                                <option>advanced</option>\n\
                                <option>intermediate</option>\n\
                            </select>\n\
                            <select name=\"level-w[]\">\n\
                                <option value=\"\" disabled selected>-Writing-</option>\n\
                                <option>beginner</option>\n\
                                <option>advanced</option>\n\
                                <option>intermediate</option>\n\
                            </select>";
        document.getElementById("lng-field").appendChild(wrapper);
        progLangId++;
    };

    document.getElementById("rmv-lng").onclick = function (e) {
        e.preventDefault();
        var lastLanguageId = document.getElementById("lng-field").lastChild.id;
        if (lastLanguageId !== "prog-lang-1") {
            document.getElementById("lng-field").lastChild.remove();
        }
    };

});