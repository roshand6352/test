var multiSelectBasic = document.getElementById("multiselect-basic"),
    multiSelectHeader = (multiSelectBasic && multi(multiSelectBasic, {enable_search: !1}), document.getElementById("location_id")),
    multiSelectOptGroup = (multiSelectHeader && multi(multiSelectHeader, {
        non_selected_header: "Locations",
        selected_header: "Selected Locations"
    }), document.getElementById("multiselect-optiongroup")),
    autoCompleteFruit = (multiSelectOptGroup && multi(multiSelectOptGroup, {enable_search: !0}), new autoComplete({
        selector: "#autoCompleteFruit",
        placeHolder: "Search for Fruits...",
        data: {
            src: ["Apple", "Banana", "Blueberry", "Cherry", "Coconut", "Kiwi", "Lemon", "Lime", "Mango", "Orange"],
            cache: !0
        },
        resultsList: {
            element: function (e, t) {
                var l;
                t.results.length || ((l = document.createElement("div")).setAttribute("class", "no_result"), l.innerHTML = '<span>Found No Results for "' + t.query + '"</span>', e.prepend(l))
            }, noResults: !0
        },
        resultItem: {highlight: !0},
        events: {
            input: {
                selection: function (e) {
                    e = e.detail.selection.value;
                    autoCompleteFruit.input.value = e
                }
            }
        }
    })), autoCompleteCars = new autoComplete({
        selector: "#autoCompleteCars",
        placeHolder: "Search for Cars...",
        data: {
            src: ["Chevrolet", "Fiat", "Ford", "Honda", "Hyundai", "Hyundai", "Kia", "Mahindra", "Maruti", "Mitsubishi", "MG", "Nissan", "Renault", "Skoda", "Tata", "Toyato", "Volkswagen"],
            cache: !0
        },
        resultsList: {
            element: function (e, t) {
                var l;
                t.results.length || ((l = document.createElement("div")).setAttribute("class", "no_result"), l.innerHTML = '<span>Found No Results for "' + t.query + '"</span>', e.prepend(l))
            }, noResults: !0
        },
        resultItem: {highlight: !0},
        events: {
            input: {
                selection: function (e) {
                    e = e.detail.selection.value;
                    autoCompleteCars.input.value = e
                }
            }
        }
    });