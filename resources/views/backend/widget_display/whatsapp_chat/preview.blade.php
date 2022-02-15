
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .btn-whatsapp::after {
            content: '';
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background-color: red;
            position: absolute;
        }

        .imgage::after {
            content: '';
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #14c656;
            position: absolute;
            bottom: 5px;
            right: 5px;
        }

        .btn-close:focus {
            box-shadow: none;
        }

        .dropdown-menu.show {
            bottom: 2rem !important;
        }
    </style>

    <title>Whatsapp Widget</title>
</head>

<body>

<div id="whatsappWidget">
    <div class="btn-group dropup" style="position: fixed;bottom:3rem;right:3rem">
        <button type="button" class="btn-whatsapp bi bi-whatsapp" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: #14c656;font-size: 2.5rem;border: none;width: 4.5rem;height: 4.5rem;border-radius: 50%;background-color: #fff;box-shadow: 0 0 5px 0 #999;">
        </button>
        <ul class="dropdown-menu"
            style="width: 400px;background-color: #00766a;padding-bottom: 0;border-radius: 1rem;box-shadow: 3px 3px 9px -3px #999;border: none;">
            <div class="wrapper">
                <div class="header" style="
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    gap: 1rem;
                    position: relative;
                    padding: 1rem 2rem 1.5rem;
                ">
                    <div class="imgage" style="
                        width: 70px;
                        height: 70px;
                        position: relative;
                    ">
                        <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" style="
                            width: 100%;
                            border-radius: 50%;
                        " />
                    </div>
                    <div class="info">
                            <span class="name" style="
                            display: block;
                            color: #fff;
                            font-size: 1.3rem;
                            line-height: 1.2;
                            font-weight: 500;
                        ">Rayan Perera</span>
                        <span class="status" style="
                            color: #fff;
                            display: block;
                            font-size: 0.9rem;
                        ">Typically replies within a day</span>
                    </div>
                    <button type="button" class="btn-close bi bi-x" data-bs-dismiss="modal" aria-label="Close"
                            style="
                        color: #fff;
                        background: none;
                        font-size: 2rem;
                        position: absolute;
                        top: -1rem;
                        right: 0;
                        opacity: 1;
                    "></button>
                </div>
                <div class="body" style="
                    background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png');
                    background-size: cover;
                    padding: 1rem 1.5rem;
                    border-bottom-right-radius: .9rem;
                    border-bottom-left-radius: .9rem;
                ">
                    <div class="message-block" style="
                        margin: 1rem 0 3rem;
                    ">
                        <div class="message" style="
                        background-color: #fff;
                        padding: 1rem 1rem 1.5rem;
                        width: 60%;
                        border-radius: 1rem;
                        position: relative;
                        box-shadow: 1px 1px 4px 0 #999;
                    ">
                                <span class="name" style="
                            display: block;
                            color: #999;
                            margin-bottom: .5rem;
                        ">Rayan Perera</span>
                            <span class="text" style="
                            display: block;
                            margin-bottom: 0.5rem;
                        ">Hello, Chamind...</span>
                            <span class="text" style="
                            display: block;
                            margin-bottom: 0.5rem;
                        ">How can I help you?</span>
                            <span class="time" style="
                            position: absolute;
                            font-size: .9rem;
                            color: #999;
                            right: .8rem;
                            bottom: .4rem;
                        ">19:12</span>
                        </div>
                    </div>
                    <button type="button" class="start-chat" style="
                        background-color: #14c656;
                        width: 90%;
                        display: block;
                        margin: 0 auto;
                        padding: 12px 0;
                        border-radius: 3rem;
                        border: none;
                        color: #fff;
                        font-size: 1.1rem;
                    ">
                        <i class="bi bi-whatsapp" style="
                            margin-right: .5rem;
                        "></i>
                        Start chat
                    </button>
                </div>
            </div>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>