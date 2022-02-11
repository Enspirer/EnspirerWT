<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    body {
        font-family: 'Montserrat'
    }
    button,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button{overflow:visible}button{text-transform:none}button,[type="button"]{-webkit-appearance:button}button{background:none;border:none;cursor:pointer}#whatsapp-chat{box-sizing:border-box !important;outline:none !important;position:fixed;width:350px;border-radius:10px;box-shadow:0 1px 15px rgba(32, 33, 36, 0.28);bottom:90px;right:30px;overflow:hidden;z-index:99;background:#fff}.whatsapp-trigger-chat{background:#fff;color:#313131;position:fixed;display:flex;font-weight:400;z-index:98;bottom:25px;right:30px;font-size:1em;padding:12px 24px;border-radius:100px;box-shadow:0 1px 5px rgba(210, 210, 210, 0.28);align-items:center}.whatsapp-trigger-chat svg{transform:scale(1.2);margin:0 10px 0 0}.whatsapp-chat-header{background:#009688;background:#095e54;color:#fff;padding:20px 20px 30px}.whatsapp-chat-header p{font-size:14px;line-height:1.3;margin:0 10px 10px}.whatsapp-chat-header .whatsapp-chat-name{font-size:16px;font-weight:600;padding-bottom:0;margin-bottom:0;line-height:0.5;float:left}.whatsapp-chat-header .whatsapp-chat-name span{float:left}button.close-chat{position:absolute;top:5px;right:15px;color:#fff;font-size:30px}.whatsapp-chat-avatar{position:relative}.whatsapp-chat-avatar::after{content:"";bottom:0px;right:0px;width:12px;height:12px;box-sizing:border-box;background-color:#4ad504;display:block;position:relative;z-index:1;border-radius:50%;border:2px solid #095e54;left:40px;top:38px}.whatsapp-chat-avatar img,.whatsapp-chat-avatar svg{border-radius:100%;width:50px;float:left;margin:0 10px 0 0}.whatsapp-message-box{display:flex}.whatsapp-message-box textarea{border:none;font-family:inherit;background:#fff;width:100%;height:auto;outline:none;resize:none;padding:5px 10px;font-size:14px;max-height:44px;line-height:2;vertical-align:middle}.whatsapp-message-box button{padding:0 10px;background:#eee;border-radius:0 0 10px}.whatsapp-message-box button svg{fill:#a6a6a6;height:24px;width:24px}@media screen and (max-width: 480px){#whatsapp-chat{width:auto;left:5%;right:5%;font-size:80%}}.whatsapp-chat-body{padding:20px 20px 20px 10px;background-color:#e6ddd4;position:relative}.whatsapp-chat-body::before{display:block;position:absolute;content:"";left:0px;top:0px;height:100%;width:100%;z-index:0;opacity:0.08;background-image:url("https://elfsight.com/assets/chats/patterns/whatsapp.png")}.whatsapp-chat-bubble{display:flex;z-index:1}.whatsapp-chat-message-loader{background-color:white;width:52.5px;height:32px;border-radius:16px;display:flex;-moz-box-pack:center;justify-content:center;-moz-box-align:center;align-items:center;margin-left:10px;opacity:0;transition:all 0.1s ease 0s;z-index:1;box-shadow:rgba(0, 0, 0, 0.13) 0px 1px 0.5px}.whatsapp-chat-message-loader .ixsrax,.whatsapp-chat-message-loader .dRvxoz{height:5px;width:5px;margin:0px 2px;border-radius:50%;display:inline-block;position:relative;animation-duration:1.2s;animation-iteration-count:infinite;animation-timing-function:linear;top:0px}.whatsapp-chat-message-loader .ixsrax{background-color:#9e9da2;animation-name:ZpjSY}.whatsapp-chat-message-loader .dRvxoz{animation-name:hPhMsj}.whatsapp-chat-message{padding:7px 14px 6px;background-color:white;border-radius:0px 8px 8px;position:relative;transition:all 0.3s ease 0s;opacity:0;transform-origin:center top 0px;z-index:2;box-shadow:rgba(0, 0, 0, 0.13) 0px 1px 0.5px;margin-top:4px;margin-left:-54px;max-width:calc(100% - 66px);text-align:left}.whatsapp-chat-message .bMIBDo{font-size:13px;font-weight:700;line-height:18px;color:rgba(0, 0, 0, 0.4)}.whatsapp-chat-message .iSpIQi{font-size:14px;line-height:19px;margin-top:4px;color:#111111}.whatsapp-chat-message .cqCDVm{text-align:right;margin-top:4px;font-size:12px;line-height:16px;color:rgba(17, 17, 17, 0.5);margin-right:-8px;margin-bottom:-4px}.whatsapp-chat-message::before{position:absolute;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");background-position:50% 50%;background-repeat:no-repeat;background-size:contain;content:"";top:0px;left:-12px;width:12px;height:19px}.show{display:block;animation:swing-in-bottom-bck 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) both}.hide{display:none}@keyframes ZpjSY{0%{background-color:#b6b5ba}15%{background-color:#111111}25%{background-color:#b6b5ba}}@keyframes hPhMsj{15%{background-color:#b6b5ba}25%{background-color:#111111}35%{background-color:#b6b5ba}}@keyframes iUMejp{25%{background-color:#b6b5ba}35%{background-color:#111111}45%{background-color:#b6b5ba}}@keyframes swing-out-bottom-fwd{0%{transform:rotateX(0);transform-origin:bottom;opacity:1}100%{transform:rotateX(-70deg);transform-origin:bottom;opacity:0;display:none}}@keyframes swing-in-bottom-bck{0%{transform:rotateX(-70deg);transform-origin:bottom;opacity:0}100%{transform:rotateX(0);transform-origin:bottom;opacity:1}}
</style>


<div id="app">
    <div id="whatsapp-chat" class="show">
        <div class="whatsapp-chat-header">
            <div class="whatsapp-chat-avatar">
                <img src="https://cdn.tedbree.com/file/faviocnb.png" alt="FDNaturales Logo">
            </div>
            <p><span class="whatsapp-chat-name">FDNaturales</span> <br>
                <small style="float: left;">Helping you heal with nature</small>
            </p>
        </div>

        <div class="whatsapp-chat-body" pattern="https://res.cloudinary.com/eventbree/image/upload/v1575854793/Widgets/whatsapp-bg.png">
            <div class="whatsapp-chat-bubble">
                <div class="whatsapp-chat-message-loader" style="opacity: 0;">
                    <div style="position: relative;display: flex;">
                        <div class="ixsrax"></div>
                        <div class="dRvxoz"></div>
                        <div class="kXBtNt"></div>
                    </div>
                </div>
                <div class="whatsapp-chat-message" style="opacity: 1;">
                    <div class="bMIBDo">FDNaturales</div>
                    <div class="iSpIQi">Hi there 👋<br><br>How can We help you?</div>
                    <div class="cqCDVm">10:51</div>
                </div>
            </div>
        </div>
        <div class="whatsapp-message-box">
            <textarea placeholder="Write a response" maxlength="120" row="1"></textarea>
            <button type="button">
                <svg viewBox="0 0 448 448">
                    <path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"></path></svg>
            </button>
        </div>
        <button type="button" class="close-chat">×</button>
    </div>
    <button class="whatsapp-trigger-chat" title="Show Chat">
        <svg width="18" viewBox="0 0 24 24">
            <path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"></path>
            <path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"></path>
            <path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"></path>
        </svg>
        <span>
      Chat with Us
      </span>
    </button>
</div>