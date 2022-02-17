function addWidget() {
const div = document.createElement('div');
div.className = 'whatsapp-widget';

div.innerHTML = `
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    #wappwidgetblcok {
        position: relative;
    }

    #wappwidgetblcok #wappwidget {
        position: fixed;
        bottom: 180px;
        right: 90px;
        display: none;
    }

    #wappwidgetblcok #wappwidget.wappview {
        display: block !important;
    }

    #wappwidgetblcok #wappwidget #wappcontainer {
        width: 390px;
        height: 390px;
        background-image: url(https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png);
        background-size: cover;
        border-radius: 15px;
        position: relative;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader {
        background-color: #00796A;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        padding: 25px 40px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappclose {
        position: absolute;
        color: #fff;
        top: 11px;
        right: 23px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappclose:hover {
        cursor: pointer;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile #wappimg {
        width: 60px;
        height: 60px;
        position: relative;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile #wappimg::after {
        content: "";
        width: 7px;
        height: 7px;
        background-color: #4AD504;
        border-radius: 50%;
        position: absolute;
        bottom: 5px;
        right: 5px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile #wappimg img {
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 50%;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile #wappinfo #wappname {
        font-size: 19px;
        font-weight: 500;
        color: #fff;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappheader #wappprofile #wappinfo #wappstatus {
        font-size: 13px;
        font-weight: 300;
        color: #fff;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappbody #wappwelcomemsg {
        position: relative;
        width: 166px;
        height: 118px;
        border-top-left-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #fff;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
        padding: 15px;
        margin-top: 35px;
        margin-left: 35px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappbody #wappwelcomemsg #wapptriangle {
        border-top: 5px solid transparent;
        border-right: 15px solid #fff;
        border-bottom: 7.5px solid transparent;
        position: absolute;
        transform: rotate(25deg);
        top: -4px;
        left: -11px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappbody #wappwelcomemsg #wappsendersname {
        font-size: 10px;
        color: #000;
        margin-bottom: 5px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappbody #wappwelcomemsg #wappmsg {
        font-size: 11px;
        color: #000;
        line-height: 2.3;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappbody #wappwelcomemsg #wappmsgtime {
        font-size: 11px;
        color: #000;
        position: absolute;
        right: 10px;
        bottom: 5px;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappfooter #wappbtn {
        width: 318px;
        height: 50px;
        background-color: #14C656;
        border-radius: 30px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%, 0);
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappfooter #wappbtn:hover {
        cursor: pointer;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappfooter #wappbtn i {
        color: #fff;
    }

    #wappwidgetblcok #wappwidget #wappcontainer #wappfooter #wappbtn #wappbtntxt {
        color: #fff;
        font-size: 15px;
        font-weight: 500;
    }

    #wappwidgetblcok #wappwidtoggler {
        width: 78px;
        height: 78px;
        background-color: #fff;
        border-radius: 50%;
        position: fixed;
        bottom: 50px;
        right: 50px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
    }

    #wappwidgetblcok #wappwidtoggler:hover {
        cursor: pointer;
    }

    #wappwidgetblcok #wappwidtoggler::after {
        content: "";
        width: 12px;
        height: 12px;
        background-color: #f00;
        position: absolute;
        border-radius: 50%;
        top: 6px;
        right: 3px;
    }

    #wappwidgetblcok #wappwidtoggler i {
        font-size: 45px;
        position: relative;
        top: 16px;
        left: 16px;
        color: #14C656;
    }

    /*# sourceMappingURL=main.css.map */
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<div id="wappwidgetblcok">
    <div id="wappwidtoggler" onclick="wapptoggle()">
        <i class="bi bi-whatsapp"></i>
    </div>

    <div id="wappwidget">
        <div id="wappcontainer">
            <div id="wappheader">
                <div id="wappclose" onclick="wappclose()">&#10006;</div>
                <div id="wappprofile">
                    <div id="wappimg">
                        <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" alt="">
                    </div>
                    <div id="wappinfo">
                        <div id="wappname">Rayan Perera</div>
                        <div id="wappstatus">Typically replies within a day</div>
                    </div>
                </div>
            </div>
            <div id="wappbody">
                <div id="wappwelcomemsg">
                    <div id="wapptriangle"></div>
                    <div id="wappsendersname">Rayan Perera</div>
                    <div id="wappmsg">Hello, chamind... <br>How can I help you?</div>
                    <div id="wappmsgtime">19:12</div>
                </div>
            </div>
            <div id="wappfooter">
                <div id="wappbtn">
                    <i class="bi bi-whatsapp"></i>
                    <div id="wappbtntxt">Start Chat</div>
                </div>
            </div>
        </div>
    </div>
</div>
`;

document.getElementById('apple').appendChild(div);
}

window.onload = addWidget;

function wapptoggle() {
document.querySelector('#wappwidget').classList.toggle("wappview");
}

function wappclose() {
widget = document.querySelector('#wappwidget').classList.remove("wappview");
}