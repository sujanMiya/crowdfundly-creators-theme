function openCity(evt, tabsName) {
    console.log(evt, 'evvt', tabsName)
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // tabcontent1 = document.getElementsByClassName("tabcontent1");
    // for (i = 0; i < tabcontent1.length; i++) {
    //     tabcontent1[i].style.display = "none";
    // }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active-tabs", "");
    }

    // tablinks2 = document.getElementsByClassName("tablinks");
    // for (i = 0; i < tablinks2.length; i++) {
    //     tablinks2[i].className = tablinks2[i].className.replace(" active-tabs", "");
    // }
    document.getElementById(tabsName).style.display = "block";
    evt.currentTarget.className += " active-tabs";
}
document.getElementById("defaultOpen").click();