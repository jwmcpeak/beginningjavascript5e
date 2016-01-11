document.attachEvent("onselectstart", function (e) {
    var target = e.srcElement;

    if (target.getAttribute("draggable")) {
        e.returnValue = false;
        target.dragDrop();
    }
});