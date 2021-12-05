const cookieBox = document.querySelector(".wrapper"),
    accepBtn = cookieBox.querySelector(".buttons button  ");

accepBtn.onclik = () => {
    .console.log("button clicked!!");
    document.cookie = "CookieBy=CodingNepal; max-age" + 60 * 60 * 24 * 30;
    if (document.cookie) { //se o cookie acima definido
        cookieBox.classList.add("hide");
    } else {
        alert("Cookie can´t be set!");
    }
}
let checkCookie = document.cookie.indexOf("CookieBy = CodingNepal");
checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");