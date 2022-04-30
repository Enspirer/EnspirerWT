@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<link rel="stylesheet" href="{{url('css/portfolio.css')}}">
    
@include('frontend.includes.home_nav')

<section class="hero-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <h1 class="title"><span>Design. Integrate. Convert</span> <br>
                We believe in customer focused unique experiences</h1>
                <p class="text">Here are few hand picked projects.</p>
                <div class="image-block">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195.437 196.019">
                        <g id="Group_557" data-name="Group 557" transform="translate(-18025 -839)">
                            <g id="Group_553" data-name="Group 553" transform="translate(18093.744 884.829)">
                            <line id="Line_449" data-name="Line 449" y2="105.219" transform="translate(27.492)" fill="none" stroke="#000" stroke-width="1"/>
                            <path id="Path_6664" data-name="Path 6664" d="M17871.891,884.452s25.523-7.09,27.418,31.2" transform="translate(-17871.891 -810.459)" fill="none" stroke="#000" stroke-width="1"/>
                            <path id="Path_6665" data-name="Path 6665" d="M17899.309,884.452s-25.523-7.09-27.418,31.2" transform="translate(-17844.322 -810.459)" fill="none" stroke="#000" stroke-width="1"/>
                            </g>
                            <g id="Group_555" data-name="Group 555" transform="translate(18025 839)">
                            <g id="Group_554" data-name="Group 554" transform="translate(0 0)">
                                <path id="Path_6666" data-name="Path 6666" d="M274.549,213.3l4.142,2.4,1.332-2.3a2.157,2.157,0,0,0,.421-1.353,2.011,2.011,0,0,0-.992-1.174l.167-.284,3.647,2.11-.166.284a4.745,4.745,0,0,0-1.106-.351,1.125,1.125,0,0,0-.689.211,2.669,2.669,0,0,0-.718.885l-1.332,2.3,3.453,2a3.731,3.731,0,0,0,.883.429.56.56,0,0,0,.363-.078,1.54,1.54,0,0,0,.43-.536l1.029-1.777a5.585,5.585,0,0,0,.622-1.363,2.215,2.215,0,0,0-.04-1.056,6.851,6.851,0,0,0-.877-1.816l.179-.309,2.1,2.423-4.671,8.076-.286-.167.216-.371a1.692,1.692,0,0,0,.228-.806.751.751,0,0,0-.175-.55,4.21,4.21,0,0,0-.961-.673l-6.808-3.939A2.559,2.559,0,0,0,273.6,215a1.369,1.369,0,0,0-.845.746l-.214.371-.286-.167,4.673-8.075,2.361,1.213-.174.3a4.191,4.191,0,0,0-1.344-.3,1.437,1.437,0,0,0-.809.312,4.018,4.018,0,0,0-.745,1.023Z" transform="translate(-265.046 -162.511)"/>
                                <path id="Path_6667" data-name="Path 6667" d="M280.879,207.6l2.35-3.047.261.2a.79.79,0,0,0-.213.483.416.416,0,0,0,.171.319,1.389,1.389,0,0,0,.714.155c.116.007.293.019.534.04l1.089.107-.326-1.1a3.181,3.181,0,0,0-.491-1.19.4.4,0,0,0-.343-.073.746.746,0,0,0-.4.308l-.262-.2,1.69-2.192.262.2a1.513,1.513,0,0,0-.273.748,6.289,6.289,0,0,0,.315,1.755l.5,1.793,3.562.179a6.008,6.008,0,0,0,1.683-.055,1.622,1.622,0,0,0,.7-.505l.253.195-2.356,3.053-.254-.2a.98.98,0,0,0,.241-.6.4.4,0,0,0-.157-.337,3.2,3.2,0,0,0-1.17-.179l-2.117-.122.585,2.109a3.477,3.477,0,0,0,.392,1.069.515.515,0,0,0,.431.078.958.958,0,0,0,.518-.36l.256.2-1.629,2.112-.255-.195a1.223,1.223,0,0,0,.166-.582,8.082,8.082,0,0,0-.347-1.712l-.756-2.747-2.729-.145a5.034,5.034,0,0,0-1.582.072,1.56,1.56,0,0,0-.748.566Z" transform="translate(-263.167 -163.919)"/>
                                <path id="Path_6668" data-name="Path 6668" d="M287.226,200.533l1.045-2.506.237-.24,1.36,1.342a4.635,4.635,0,0,1-.183-1.969,2.345,2.345,0,0,1,.638-1.259,2.581,2.581,0,0,1,2.127-.784,4.566,4.566,0,0,1,2.893,1.441,5.107,5.107,0,0,1,1.635,3.323,3.213,3.213,0,0,1-.962,2.588,3.14,3.14,0,0,1-.935.682,2.7,2.7,0,0,1-.948.195l1.772,1.75a3.329,3.329,0,0,0,.832.677.763.763,0,0,0,.508,0,2.176,2.176,0,0,0,.744-.565l.236.233-3.012,3.05-.235-.235.157-.157a1.629,1.629,0,0,0,.457-.729.648.648,0,0,0-.041-.409,3.754,3.754,0,0,0-.725-.849l-5.5-5.432a4.05,4.05,0,0,0-.767-.658.593.593,0,0,0-.389-.065.727.727,0,0,0-.374.227,1.562,1.562,0,0,0-.293.475Zm3.016-1.034,2.172,2.146a6.6,6.6,0,0,0,.984.859,1.655,1.655,0,0,0,1.078.206,1.892,1.892,0,0,0,1.141-.6,1.759,1.759,0,0,0,.522-1.519,4.03,4.03,0,0,0-1.315-2.314,4.456,4.456,0,0,0-2.628-1.443,1.7,1.7,0,0,0-1.449.476,1.844,1.844,0,0,0-.443.754A4.946,4.946,0,0,0,290.242,199.5Z" transform="translate(-261.785 -165.292)"/>
                                <path id="Path_6669" data-name="Path 6669" d="M293.663,187.786l6.914,8.356a2.939,2.939,0,0,0,.736.714.8.8,0,0,0,.507.073,1.966,1.966,0,0,0,.75-.453l.2.247-3.088,2.556-.2-.247a1.738,1.738,0,0,0,.518-.58.778.778,0,0,0,0-.5,3,3,0,0,0-.566-.865l-4.735-5.721a12.9,12.9,0,0,0-1.132-1.271.736.736,0,0,0-.431-.206.536.536,0,0,0-.346.136,1.7,1.7,0,0,0-.363.485l-.317-.144,1.241-2.325Z" transform="translate(-260.721 -166.886)"/>
                                <path id="Path_6670" data-name="Path 6670" d="M301.725,186.323a3.622,3.622,0,0,1,3.26-.492,4.335,4.335,0,0,1,2.337,1.766,5.211,5.211,0,0,1,.8,2.138,3.744,3.744,0,0,1-1.649,3.838,3.465,3.465,0,0,1-3.261.414,4.571,4.571,0,0,1-2.315-1.8,4.932,4.932,0,0,1-.783-2.169,3.811,3.811,0,0,1,.3-2.181A3.773,3.773,0,0,1,301.725,186.323Zm.093.636a1.857,1.857,0,0,0-.633.762,1.976,1.976,0,0,0-.091,1.249,4.77,4.77,0,0,0,.767,1.669,6.284,6.284,0,0,0,2.305,2.16,2.109,2.109,0,0,0,2.275.034,1.751,1.751,0,0,0,.788-1.389,4.07,4.07,0,0,0-.9-2.351,5.605,5.605,0,0,0-2.689-2.325A1.931,1.931,0,0,0,301.818,186.959Z" transform="translate(-258.987 -167.352)"/>
                                <path id="Path_6671" data-name="Path 6671" d="M308.9,182.16l.86,1.626q.049-2.1,1-2.611a1.139,1.139,0,0,1,.857-.114.92.92,0,0,1,.608.462.815.815,0,0,1,.069.628.739.739,0,0,1-.376.472,1.167,1.167,0,0,1-.762.055,1.164,1.164,0,0,0-.654,0,.528.528,0,0,0-.225.32,4.306,4.306,0,0,0-.17,1.454l1.83,3.465a2.449,2.449,0,0,0,.631.828.917.917,0,0,0,.55.163,1.822,1.822,0,0,0,.826-.253l.15.284-3.7,1.956-.15-.284a1.741,1.741,0,0,0,.728-.608.766.766,0,0,0,.065-.549,4.554,4.554,0,0,0-.367-.785l-1.48-2.8a13.315,13.315,0,0,0-.846-1.477.668.668,0,0,0-.374-.252.605.605,0,0,0-.4.072,1.757,1.757,0,0,0-.489.41l-.229-.242,1.72-2.04Z" transform="translate(-257.512 -168.359)"/>
                                <path id="Path_6672" data-name="Path 6672" d="M315.39,182.507a4.2,4.2,0,0,0,1.874,2.33,2.693,2.693,0,0,0,2.331.19,2.293,2.293,0,0,0,1.137-.925,3.281,3.281,0,0,0,.367-1.773l.324.063a4.257,4.257,0,0,1-.192,2.473,2.908,2.908,0,0,1-1.729,1.763,3.293,3.293,0,0,1-2.768-.136,4.393,4.393,0,0,1-2.11-2.481,4.656,4.656,0,0,1-.206-3.438,3.509,3.509,0,0,1,2.078-2.087,3.019,3.019,0,0,1,2.433.011,3.311,3.311,0,0,1,1.715,1.928Zm-.191-.482,3.518-1.394a3.543,3.543,0,0,0-.581-.961,1.774,1.774,0,0,0-.909-.483,1.678,1.678,0,0,0-.963.073,1.843,1.843,0,0,0-1.02,1.024A2.489,2.489,0,0,0,315.2,182.025Z" transform="translate(-255.916 -168.965)"/>
                                <path id="Path_6673" data-name="Path 6673" d="M332.116,170.717a5.488,5.488,0,0,1,4.338,1.035,6.184,6.184,0,0,1,2.5,4.088,6.377,6.377,0,0,1-.9,4.817,5.821,5.821,0,0,1-8.272,1.542,6.373,6.373,0,0,1-2.492-4.222,6.119,6.119,0,0,1,1.1-4.979A5.8,5.8,0,0,1,332.116,170.717Zm-.051.671a3.2,3.2,0,0,0-2.35,1.65,6.817,6.817,0,0,0-.423,4.54,7.193,7.193,0,0,0,2.059,4.263,3.131,3.131,0,0,0,2.746.737,3.511,3.511,0,0,0,2.534-1.808,6.478,6.478,0,0,0,.348-4.328,7.331,7.331,0,0,0-2.027-4.341A3.3,3.3,0,0,0,332.064,171.388Z" transform="translate(-253.088 -170.623)"/>
                                <path id="Path_6674" data-name="Path 6674" d="M347.083,172.81l.169,4.95a12.667,12.667,0,0,0,.125,1.733.772.772,0,0,0,.23.435.515.515,0,0,0,.348.114,1.581,1.581,0,0,0,.619-.174l.136.308-2.41,1.092-.4.013-.058-1.732a7.479,7.479,0,0,1-1.556,1.492,2.46,2.46,0,0,1-1.159.335,1.866,1.866,0,0,1-1.2-.357,2.054,2.054,0,0,1-.736-1,6.2,6.2,0,0,1-.257-1.758l-.124-3.651a1.806,1.806,0,0,0-.152-.8.829.829,0,0,0-.382-.331,2.139,2.139,0,0,0-.891-.08l-.011-.331,2.864-.1.186,5.469a2.057,2.057,0,0,0,.448,1.486,1.377,1.377,0,0,0,.972.324,2.021,2.021,0,0,0,.861-.272,4.666,4.666,0,0,0,1.124-.957l-.158-4.631a1.316,1.316,0,0,0-.285-.933,1.663,1.663,0,0,0-1.067-.227l-.011-.33Z" transform="translate(-250.431 -170.147)"/>
                                <path id="Path_6675" data-name="Path 6675" d="M352,172.859l-.132,1.835q1.156-1.763,2.233-1.684a1.148,1.148,0,0,1,.788.357.917.917,0,0,1,.272.714.825.825,0,0,1-.274.571.741.741,0,0,1-.569.2,1.171,1.171,0,0,1-.677-.357,1.154,1.154,0,0,0-.552-.348.529.529,0,0,0-.362.152,4.327,4.327,0,0,0-.913,1.143l-.281,3.909a2.426,2.426,0,0,0,.1,1.035.922.922,0,0,0,.38.431,1.8,1.8,0,0,0,.835.222l-.024.319-4.176-.3.023-.32a1.748,1.748,0,0,0,.94-.129.766.766,0,0,0,.345-.432,4.611,4.611,0,0,0,.107-.86l.226-3.161a13.123,13.123,0,0,0,.063-1.7.664.664,0,0,0-.185-.412.6.6,0,0,0-.378-.152,1.786,1.786,0,0,0-.634.089l-.064-.326,2.538-.82Z" transform="translate(-248.41 -170.142)"/>
                                <path id="Path_6676" data-name="Path 6676" d="M378.889,175.9l-.1.318a1.541,1.541,0,0,0-.784-.057,1.69,1.69,0,0,0-.718.449,10.132,10.132,0,0,0-.963,1.268l-6.014,8.393-.343-.1-.438-8.2L364.7,184.6l-.308-.093-.586-10.659c-.043-.8-.079-1.27-.108-1.421a1.175,1.175,0,0,0-.323-.622,1.8,1.8,0,0,0-.754-.4l.095-.315,4.3,1.276-.095.315-.206-.06a1.069,1.069,0,0,0-.754,0,.66.66,0,0,0-.387.425,6.118,6.118,0,0,0-.033,1.488l.349,7.192,3.57-4.965-.052-1.076-.041-.86a4.492,4.492,0,0,0-.178-.873,1.1,1.1,0,0,0-.192-.354,1.66,1.66,0,0,0-.362-.351,2.037,2.037,0,0,0-.5-.2l.1-.315,4.519,1.342-.1.317-.308-.09a1.045,1.045,0,0,0-.761,0,.752.752,0,0,0-.39.49,5.791,5.791,0,0,0-.067,1.638l.352,6.967,4.106-5.734a5.661,5.661,0,0,0,.815-1.361.653.653,0,0,0-.015-.4.7.7,0,0,0-.241-.334,2.683,2.683,0,0,0-.812-.373l.094-.315Z" transform="translate(-245.367 -170.521)"/>
                                <path id="Path_6677" data-name="Path 6677" d="M380.624,180.251a3.628,3.628,0,0,1,2.1,2.541,4.347,4.347,0,0,1-.309,2.913A5.248,5.248,0,0,1,381,187.494a3.746,3.746,0,0,1-4.14.566,3.467,3.467,0,0,1-2.034-2.582,4.537,4.537,0,0,1,.348-2.91,4.925,4.925,0,0,1,1.453-1.789,3.716,3.716,0,0,1,4-.528Zm-.5.408a1.865,1.865,0,0,0-.98-.147,1.965,1.965,0,0,0-1.118.565A4.784,4.784,0,0,0,377,182.592a6.332,6.332,0,0,0-.664,3.091,2.112,2.112,0,0,0,1.145,1.965,1.741,1.741,0,0,0,1.6-.04,4.047,4.047,0,0,0,1.55-1.985,5.588,5.588,0,0,0,.605-3.5A1.935,1.935,0,0,0,380.129,180.659Z" transform="translate(-242.731 -168.604)"/>
                                <path id="Path_6678" data-name="Path 6678" d="M388.08,184.193l-.949,1.576q1.828-1.045,2.752-.487a1.147,1.147,0,0,1,.543.676.919.919,0,0,1-.084.757.81.81,0,0,1-.5.385.743.743,0,0,1-.6-.079,1.171,1.171,0,0,1-.44-.625,1.163,1.163,0,0,0-.335-.561.528.528,0,0,0-.391-.027,4.26,4.26,0,0,0-1.333.6l-2.023,3.354a2.461,2.461,0,0,0-.385.968.913.913,0,0,0,.145.557,1.791,1.791,0,0,0,.643.576l-.167.274-3.585-2.162.167-.274a1.741,1.741,0,0,0,.9.311.762.762,0,0,0,.5-.229,4.59,4.59,0,0,0,.486-.718l1.635-2.713a13.077,13.077,0,0,0,.828-1.486.675.675,0,0,0,.023-.452.6.6,0,0,0-.269-.308,1.732,1.732,0,0,0-.6-.207l.09-.323,2.633.421Z" transform="translate(-241.284 -167.802)"/>
                                <path id="Path_6679" data-name="Path 6679" d="M396.707,185.377l-4.906,6.488,2.8-.256a7.107,7.107,0,0,0,1.075-.15.371.371,0,0,0,.185-.128.394.394,0,0,0,.069-.334.8.8,0,0,0-.3-.412l.172-.228,2.836,2.142-.174.229a3.333,3.333,0,0,0-1.106-.558,3.924,3.924,0,0,0-1.293-.058l-2.842.28.075,3.379q.035,1.4.1,1.822a2.461,2.461,0,0,0,.269.887,2.39,2.39,0,0,0,.565.539l-.194.256-3.167-2.4.194-.256a.832.832,0,0,0,.427.195.315.315,0,0,0,.256-.138,1.371,1.371,0,0,0,.113-.743l-.068-4.07-1.635,2.166a3.125,3.125,0,0,0-.543.9.713.713,0,0,0,.039.476,2.387,2.387,0,0,0,.642.631l-.194.257-3.318-2.51.194-.256a2.217,2.217,0,0,0,.84.443.65.65,0,0,0,.412-.069,2.728,2.728,0,0,0,.718-.731l4.491-5.938a13.521,13.521,0,0,0,1-1.424.761.761,0,0,0,.1-.474.566.566,0,0,0-.227-.321,1.689,1.689,0,0,0-.541-.218l.068-.341,2.54.667Z" transform="translate(-240.105 -167.61)"/>
                                <path id="Path_6680" data-name="Path 6680" d="M403.616,196.211l-1.916,2.024-.213-.2a3.617,3.617,0,0,0,.594-1.9,1.946,1.946,0,0,0-.656-1.273,1.5,1.5,0,0,0-.958-.453.957.957,0,0,0-.783.267,1.322,1.322,0,0,0-.381.82,3.147,3.147,0,0,0,.281,1.336l.511,1.355a2.652,2.652,0,0,1-.287,2.94,2.2,2.2,0,0,1-1.848.726,2.916,2.916,0,0,1-1.84-.8,6.561,6.561,0,0,1-1.062-1.372,1.782,1.782,0,0,0-.287-.4.355.355,0,0,0-.393-.052l-.214-.2,2.008-2.121.214.2a3.31,3.31,0,0,0-.6,2.024,2.294,2.294,0,0,0,.711,1.545,1.41,1.41,0,0,0,.979.43,1.148,1.148,0,0,0,.88-.365,1.4,1.4,0,0,0,.4-1.05,7.6,7.6,0,0,0-.524-1.959,5.1,5.1,0,0,1-.432-2.009,2,2,0,0,1,.592-1.208,2.255,2.255,0,0,1,1.662-.75,2.451,2.451,0,0,1,1.766.739,4.185,4.185,0,0,1,.707.952,2.838,2.838,0,0,0,.35.515.36.36,0,0,0,.2.108.87.87,0,0,0,.326-.073Z" transform="translate(-238.499 -165.584)"/>
                                <path id="Path_6681" data-name="Path 6681" d="M428.937,234.161l-4.039,1.106-.086-.32a5.187,5.187,0,0,0,1.7-1.062,2.983,2.983,0,0,0,.78-1.441,3.272,3.272,0,0,0-.013-1.643,2.162,2.162,0,0,0-.953-1.331,1.717,1.717,0,0,0-1.4-.245,1.53,1.53,0,0,0-.873.637,9.886,9.886,0,0,0-1.027,3.01,18.313,18.313,0,0,1-.736,2.6,3.425,3.425,0,0,1-.854,1.223,3.045,3.045,0,0,1-1.247.688,3.127,3.127,0,0,1-2.568-.4,3.861,3.861,0,0,1-1.684-2.384,5.751,5.751,0,0,1-.184-.977,9.658,9.658,0,0,1,.012-1.192,5.236,5.236,0,0,0-.021-1.139.465.465,0,0,0-.223-.3,1.061,1.061,0,0,0-.585-.039l-.086-.318,4-1.1.086.318a5.831,5.831,0,0,0-1.716,1.119,3,3,0,0,0-.721,1.441,3.723,3.723,0,0,0,.055,1.823,2.514,2.514,0,0,0,1.034,1.545,1.825,1.825,0,0,0,1.515.257,1.889,1.889,0,0,0,.8-.475,2.7,2.7,0,0,0,.616-.961,21.072,21.072,0,0,0,.6-2.135,18.257,18.257,0,0,1,.756-2.5,3.745,3.745,0,0,1,.839-1.264,2.84,2.84,0,0,1,1.236-.689,2.98,2.98,0,0,1,2.429.371,3.555,3.555,0,0,1,1.581,2.207,5.1,5.1,0,0,1,.084,2.1,2.1,2.1,0,0,0-.029.738.538.538,0,0,0,.234.331,1.111,1.111,0,0,0,.6.079Z" transform="translate(-233.995 -158.149)"/>
                                <path id="Path_6682" data-name="Path 6682" d="M428.319,239.864l-2.652.432.308,1.885-.617.1-.308-1.884-5.233.854a1.762,1.762,0,0,0-1.021.4.718.718,0,0,0-.179.621,1.016,1.016,0,0,0,.273.535,1.173,1.173,0,0,0,.6.336l.055.343a2.792,2.792,0,0,1-1.442-.66,1.9,1.9,0,0,1-.625-1.092,1.551,1.551,0,0,1,.095-.829,1.367,1.367,0,0,1,.549-.677,3.367,3.367,0,0,1,1.26-.4l5.428-.885-.209-1.277.291-.048a3.428,3.428,0,0,0,.818.884,5.261,5.261,0,0,0,1.246.723,9.8,9.8,0,0,0,1.315.364Z" transform="translate(-233.426 -156.035)"/>
                                <path id="Path_6683" data-name="Path 6683" d="M419.6,249.018a13.5,13.5,0,0,1-1.229-1.5,2.433,2.433,0,0,1-.291-1.008,1.841,1.841,0,0,1,.486-1.433,2.134,2.134,0,0,1,1.486-.65,1.952,1.952,0,0,1,1.052.2,3.545,3.545,0,0,1,1.224,1.191,19.788,19.788,0,0,1,1.5,2.918l.321-.021a2.683,2.683,0,0,0,1.648-.5,1.413,1.413,0,0,0,.379-1.158,1.274,1.274,0,0,0-.364-.871.913.913,0,0,0-.717-.291l-.515.054a.891.891,0,0,1-.647-.168.712.712,0,0,1-.259-.533.691.691,0,0,1,.195-.553.906.906,0,0,1,.619-.252,1.831,1.831,0,0,1,1.46.687,3.4,3.4,0,0,1,.79,2.158,3.834,3.834,0,0,1-.246,1.807,1.679,1.679,0,0,1-.812.832,4.875,4.875,0,0,1-1.556.267l-2.769.188a12.51,12.51,0,0,0-1.427.14.614.614,0,0,0-.342.17.356.356,0,0,0-.073.242.512.512,0,0,0,.078.246,5.859,5.859,0,0,0,.7.677l-.5.034q-1.4-.908-1.464-1.816a.871.871,0,0,1,.254-.716A1.642,1.642,0,0,1,419.6,249.018Zm.581-.038,3.108-.211a17.879,17.879,0,0,0-.874-1.687,2.993,2.993,0,0,0-.888-.95,1.587,1.587,0,0,0-.956-.24,1.512,1.512,0,0,0-1.037.454,1.16,1.16,0,0,0-.364.911A3.234,3.234,0,0,0,420.178,248.981Z" transform="translate(-233.293 -154.554)"/>
                                <path id="Path_6684" data-name="Path 6684" d="M426.845,255.251l-1.839-.062q1.8,1.089,1.768,2.168a1.147,1.147,0,0,1-.325.8.92.92,0,0,1-.7.3.825.825,0,0,1-.582-.252.74.74,0,0,1-.223-.563,1.18,1.18,0,0,1,.331-.689,1.175,1.175,0,0,0,.328-.565.535.535,0,0,0-.167-.353,4.321,4.321,0,0,0-1.178-.871l-3.918-.128a2.44,2.44,0,0,0-1.031.135.925.925,0,0,0-.414.4,1.785,1.785,0,0,0-.19.84l-.322-.01.139-4.184.32.011a1.755,1.755,0,0,0,.166.934.771.771,0,0,0,.446.328,4.609,4.609,0,0,0,.863.073l3.167.1a13.416,13.416,0,0,0,1.7,0,.675.675,0,0,0,.4-.2.6.6,0,0,0,.138-.385,1.7,1.7,0,0,0-.114-.63l.326-.077.918,2.5Z" transform="translate(-233.225 -152.856)"/>
                                <path id="Path_6685" data-name="Path 6685" d="M428.757,262.444l-2.671-.309-.22,1.9-.621-.072.222-1.9-5.268-.613a1.8,1.8,0,0,0-1.09.1.727.727,0,0,0-.342.55,1.015,1.015,0,0,0,.114.588,1.162,1.162,0,0,0,.488.487l-.04.348a2.821,2.821,0,0,1-1.207-1.03,1.906,1.906,0,0,1-.3-1.221,1.591,1.591,0,0,1,.318-.773,1.385,1.385,0,0,1,.715-.5,3.425,3.425,0,0,1,1.321-.035l5.462.635.15-1.285.293.034a3.4,3.4,0,0,0,.544,1.074,5.291,5.291,0,0,0,1,1.036,9.964,9.964,0,0,0,1.167.711Z" transform="translate(-233.35 -151.311)"/>
                                <path id="Path_6686" data-name="Path 6686" d="M426.241,279.814l-1.254,4.032-.315-.1.069-.22a1.811,1.811,0,0,0,0-.709,2.633,2.633,0,0,0-.32-.951,7.938,7.938,0,0,0-.927-1.231l-3.523-4.154-2.9-.9a2.4,2.4,0,0,0-1.4-.174,1.381,1.381,0,0,0-.676.912l-.117.374-.315-.1,1.527-4.91.315.1-.127.409a1.233,1.233,0,0,0,.119,1.178,2.7,2.7,0,0,0,1.186.576l2.736.851,5.828-1.666a10.38,10.38,0,0,0,1.3-.431,3.132,3.132,0,0,0,.77-.673,1.17,1.17,0,0,0,.24-.466l.314.1-1.537,4.943-.315-.1.079-.256a1.552,1.552,0,0,0,.041-.8.627.627,0,0,0-.458-.511,2.8,2.8,0,0,0-1.269.174l-4.475,1.255,2.857,3.374a2.785,2.785,0,0,0,1.035.883.8.8,0,0,0,.465.01.876.876,0,0,0,.4-.264,1.773,1.773,0,0,0,.321-.658Z" transform="translate(-234.056 -148.644)"/>
                                <path id="Path_6687" data-name="Path 6687" d="M419.755,286.017a3.627,3.627,0,0,1-2.512,2.136,4.341,4.341,0,0,1-2.916-.269,5.2,5.2,0,0,1-1.807-1.4,3.737,3.737,0,0,1-.622-4.132,3.472,3.472,0,0,1,2.552-2.07,4.573,4.573,0,0,1,2.917.309,4.96,4.96,0,0,1,1.808,1.431,3.813,3.813,0,0,1,.891,2.015A3.756,3.756,0,0,1,419.755,286.017Zm-.415-.491a1.843,1.843,0,0,0,.136-.981,1.971,1.971,0,0,0-.581-1.111,4.736,4.736,0,0,0-1.531-1.014,6.3,6.3,0,0,0-3.1-.624,2.112,2.112,0,0,0-1.95,1.172,1.735,1.735,0,0,0,.062,1.594,4.043,4.043,0,0,0,2,1.525,5.61,5.61,0,0,0,3.511.559A1.932,1.932,0,0,0,419.34,285.527Z" transform="translate(-234.715 -146.768)"/>
                                <path id="Path_6688" data-name="Path 6688" d="M413.527,297.241l-4.235-2.572a12.431,12.431,0,0,0-1.52-.844.8.8,0,0,0-.488-.046.519.519,0,0,0-.286.23,1.577,1.577,0,0,0-.194.611l-.332-.056.407-2.612.21-.343,1.478.9a7.468,7.468,0,0,1-.393-2.118,2.461,2.461,0,0,1,.354-1.156,1.879,1.879,0,0,1,.958-.811,2.042,2.042,0,0,1,1.237-.067,6.161,6.161,0,0,1,1.614.748L415.457,291a1.78,1.78,0,0,0,.751.31.845.845,0,0,0,.486-.139,2.163,2.163,0,0,0,.556-.7l.283.172-1.487,2.449-4.679-2.84a2.032,2.032,0,0,0-1.487-.437,1.381,1.381,0,0,0-.8.634,2.009,2.009,0,0,0-.246.868,4.75,4.75,0,0,0,.186,1.467l3.96,2.4a1.321,1.321,0,0,0,.938.272c.228-.06.485-.317.774-.767l.281.172Z" transform="translate(-235.819 -145.001)"/>
                                <path id="Path_6689" data-name="Path 6689" d="M410.478,301.667l-1.464-1.113q.842,1.933.188,2.791a1.146,1.146,0,0,1-.728.465.916.916,0,0,1-.747-.164.81.81,0,0,1-.329-.541.739.739,0,0,1,.144-.586,1.171,1.171,0,0,1,.67-.37,1.155,1.155,0,0,0,.593-.274.519.519,0,0,0,.069-.385,4.35,4.35,0,0,0-.457-1.391l-3.119-2.371a2.4,2.4,0,0,0-.921-.487.914.914,0,0,0-.569.084,1.8,1.8,0,0,0-.641.576l-.256-.195,2.534-3.332.257.195a1.751,1.751,0,0,0-.407.859.758.758,0,0,0,.174.524,4.446,4.446,0,0,0,.661.561l2.523,1.918a13.233,13.233,0,0,0,1.388.984.676.676,0,0,0,.446.071.616.616,0,0,0,.335-.235,1.741,1.741,0,0,0,.272-.578l.311.125-.7,2.572Z" transform="translate(-236.594 -143.676)"/>
                                <path id="Path_6690" data-name="Path 6690" d="M404.868,312.872l.228.241-3.781,3.551-.226-.244.319-.3a1.281,1.281,0,0,0,.488-1.057,2.73,2.73,0,0,0-.784-1.147l-4.053-4.316a6.792,6.792,0,0,1-1.3-1.819A3.437,3.437,0,0,1,395.5,306a2.609,2.609,0,0,1,.858-1.668,1.945,1.945,0,0,1,1.247-.6,1.231,1.231,0,0,1,1,.362.892.892,0,0,1,.289.635.976.976,0,0,1-.312.675.788.788,0,0,1-.5.213,3.023,3.023,0,0,1-1.1-.335c-.32-.14-.558-.138-.715.01a.573.573,0,0,0-.127.522,1.9,1.9,0,0,0,.563.906l5.658,6.027a4,4,0,0,0,.917.8.807.807,0,0,0,.536.026,1.65,1.65,0,0,0,.738-.4Z" transform="translate(-238.212 -141.639)"/>
                                <path id="Path_6691" data-name="Path 6691" d="M394.738,317.229a3.629,3.629,0,0,1-3.232.658,4.332,4.332,0,0,1-2.425-1.643,5.212,5.212,0,0,1-.91-2.095,3.737,3.737,0,0,1,1.449-3.919,3.462,3.462,0,0,1,3.233-.582,4.561,4.561,0,0,1,2.406,1.678,4.965,4.965,0,0,1,.894,2.125,3.826,3.826,0,0,1-.191,2.194A3.782,3.782,0,0,1,394.738,317.229Zm-.127-.632a1.856,1.856,0,0,0,.592-.794,1.956,1.956,0,0,0,.027-1.252,4.706,4.706,0,0,0-.85-1.627,6.294,6.294,0,0,0-2.414-2.041,2.112,2.112,0,0,0-2.274.085,1.737,1.737,0,0,0-.715,1.428A4.067,4.067,0,0,0,390,314.7a5.607,5.607,0,0,0,2.806,2.182A1.934,1.934,0,0,0,394.611,316.6Z" transform="translate(-239.825 -140.387)"/>
                                <path id="Path_6692" data-name="Path 6692" d="M383.974,324.014l-2.465-4.3a12.515,12.515,0,0,0-.922-1.475.779.779,0,0,0-.406-.276.508.508,0,0,0-.36.063,1.561,1.561,0,0,0-.465.441l-.264-.207,1.62-2.092.348-.2.862,1.5a7.491,7.491,0,0,1,.678-2.046,2.454,2.454,0,0,1,.87-.837,1.862,1.862,0,0,1,1.23-.25,2.058,2.058,0,0,1,1.117.538,6.209,6.209,0,0,1,1.051,1.437l1.816,3.169a1.761,1.761,0,0,0,.508.633.816.816,0,0,0,.492.114,2.168,2.168,0,0,0,.826-.345l.166.286-2.487,1.426-2.723-4.749q-.566-.99-1.09-1.1a1.394,1.394,0,0,0-1.009.169,1.984,1.984,0,0,0-.636.641,4.723,4.723,0,0,0-.546,1.372l2.3,4.021q.345.6.688.689a1.642,1.642,0,0,0,1.05-.3l.164.287Z" transform="translate(-241.781 -139.332)"/>
                                <path id="Path_6693" data-name="Path 6693" d="M378.908,326.476l-.743-1.682q-.194,2.1-1.184,2.533a1.141,1.141,0,0,1-.863.056.92.92,0,0,1-.574-.5.818.818,0,0,1-.026-.633.739.739,0,0,1,.408-.443,1.156,1.156,0,0,1,.765,0,1.181,1.181,0,0,0,.651.05.543.543,0,0,0,.247-.3,4.277,4.277,0,0,0,.272-1.438l-1.584-3.585a2.425,2.425,0,0,0-.57-.871.906.906,0,0,0-.538-.2,1.8,1.8,0,0,0-.84.195l-.13-.293,3.83-1.693.129.292a1.759,1.759,0,0,0-.77.555.774.774,0,0,0-.1.543,4.675,4.675,0,0,0,.309.811l1.282,2.9a13.288,13.288,0,0,0,.74,1.529.658.658,0,0,0,.357.278.6.6,0,0,0,.405-.043,1.745,1.745,0,0,0,.516-.376l.212.259-1.856,1.913Z" transform="translate(-242.846 -138.605)"/>
                                <path id="Path_6694" data-name="Path 6694" d="M372.467,327.419a3.858,3.858,0,0,1-2.076,2.492,1.967,1.967,0,0,1-1.2.037,2.252,2.252,0,0,1-1.07-.813,5.124,5.124,0,0,1-.69-1.5l-1.075-3.322a2.976,2.976,0,0,0-.443-.964.733.733,0,0,0-.409-.233,1.791,1.791,0,0,0-.807.13l-.1-.307,3.848-1.245.1.307-.161.051a1.355,1.355,0,0,0-.706.413.915.915,0,0,0-.144.584,5.118,5.118,0,0,0,.224.81l1.031,3.184a3.393,3.393,0,0,0,.776,1.454,1.035,1.035,0,0,0,1.084.178,2.947,2.947,0,0,0,1.656-1.755l-1.327-4.1a3.164,3.164,0,0,0-.409-.947.823.823,0,0,0-.444-.254,2.148,2.148,0,0,0-.883.158l-.1-.306,3.848-1.245.1.306-.169.056q-.6.192-.705.56a2.305,2.305,0,0,0,.163,1.218l.935,2.889a13.15,13.15,0,0,0,.616,1.685.75.75,0,0,0,.33.352.54.54,0,0,0,.388,0,1.7,1.7,0,0,0,.527-.311l.226.264-2.036,1.711-.365.117Z" transform="translate(-244.937 -138.048)"/>
                                <path id="Path_6695" data-name="Path 6695" d="M363.512,328.083a4.189,4.189,0,0,0-1.425-2.628,2.692,2.692,0,0,0-2.259-.608,2.294,2.294,0,0,0-1.285.706,3.259,3.259,0,0,0-.68,1.678l-.307-.121a4.257,4.257,0,0,1,.633-2.4,2.911,2.911,0,0,1,2.019-1.425,3.294,3.294,0,0,1,2.7.632,4.393,4.393,0,0,1,1.631,2.82,4.663,4.663,0,0,1-.415,3.418,3.511,3.511,0,0,1-2.421,1.679,3.023,3.023,0,0,1-2.392-.447,3.326,3.326,0,0,1-1.338-2.205Zm.1.509-3.713.737a3.481,3.481,0,0,0,.4,1.05,1.749,1.749,0,0,0,.8.641,1.674,1.674,0,0,0,.962.1,1.848,1.848,0,0,0,1.187-.824A2.5,2.5,0,0,0,363.613,328.592Z" transform="translate(-246.471 -137.395)"/>
                                <path id="Path_6696" data-name="Path 6696" d="M357.377,333.146l-3.8.3-.026-.33.186-.013a.9.9,0,0,0,.587-.222.551.551,0,0,0,.166-.447,2.452,2.452,0,0,0-.37-.94l-2.312-3.952-1.465,4.648a1.871,1.871,0,0,0-.094.733.407.407,0,0,0,.082.236.49.49,0,0,0,.235.138,1.683,1.683,0,0,0,.538.015l.026.33-2.65.212-.027-.33a1.265,1.265,0,0,0,.5-.183,1.487,1.487,0,0,0,.359-.431,5.436,5.436,0,0,0,.247-.71l2.67-8.4a4.2,4.2,0,0,1,1.117-1.889,2.5,2.5,0,0,1,1.45-.726,1.257,1.257,0,0,1,.888.235.917.917,0,0,1,.393.667.771.771,0,0,1-.2.619.954.954,0,0,1-.653.281,2.429,2.429,0,0,1-.817-.13,1.983,1.983,0,0,0-.454-.1.922.922,0,0,0-.561.323,2.9,2.9,0,0,0-.552,1.119l-.465,1.461,3.418,5.915a4.965,4.965,0,0,0,.482.652,2.093,2.093,0,0,0,.4.39,2.026,2.026,0,0,0,.678.195Z" transform="translate(-248.452 -137.838)"/>
                                <path id="Path_6697" data-name="Path 6697" d="M300.3,323.168l2.183-3.572.281.173a5.237,5.237,0,0,0-.509,1.936,3.01,3.01,0,0,0,.419,1.586,3.267,3.267,0,0,0,1.137,1.186,2.155,2.155,0,0,0,1.605.317,1.721,1.721,0,0,0,1.191-.783,1.536,1.536,0,0,0,.2-1.062,9.877,9.877,0,0,0-1.316-2.9,18.3,18.3,0,0,1-1.249-2.4,3.417,3.417,0,0,1-.217-1.476,3.025,3.025,0,0,1,.437-1.355,3.127,3.127,0,0,1,2.146-1.466,3.867,3.867,0,0,1,2.861.581,5.825,5.825,0,0,1,.8.587,9.738,9.738,0,0,1,.809.876,5.158,5.158,0,0,0,.8.815.469.469,0,0,0,.37.071,1.075,1.075,0,0,0,.453-.374l.283.173-2.165,3.542-.283-.172a5.865,5.865,0,0,0,.485-1.991,3.005,3.005,0,0,0-.464-1.545,3.725,3.725,0,0,0-1.288-1.287,2.516,2.516,0,0,0-1.812-.418,1.828,1.828,0,0,0-1.279.851,1.9,1.9,0,0,0-.261.9,2.715,2.715,0,0,0,.209,1.124,21.6,21.6,0,0,0,1.029,1.963,18.285,18.285,0,0,1,1.162,2.336,3.775,3.775,0,0,1,.253,1.494,2.873,2.873,0,0,1-.427,1.352,2.979,2.979,0,0,1-2.024,1.393,3.56,3.56,0,0,1-2.662-.525,5.081,5.081,0,0,1-1.5-1.467,2.12,2.12,0,0,0-.485-.559.545.545,0,0,0-.4-.08,1.106,1.106,0,0,0-.494.353Z" transform="translate(-258.939 -139.559)"/>
                                <path id="Path_6698" data-name="Path 6698" d="M297.249,309.526a4.429,4.429,0,0,1,2.56-1.143,3.1,3.1,0,0,1,2.211.643,3.153,3.153,0,0,1,1.178,2.423,4.6,4.6,0,0,1-1.151,3.121,4.349,4.349,0,0,1-2.846,1.743,3.671,3.671,0,0,1-2.907-.765,3.026,3.026,0,0,1-1.157-1.732,1.764,1.764,0,0,1,.216-1.521.72.72,0,0,1,.513-.293.841.841,0,0,1,.609.214.95.95,0,0,1,.412.759,1.4,1.4,0,0,1-.286.684,1.171,1.171,0,0,0-.216.855,1.288,1.288,0,0,0,.511.748,1.777,1.777,0,0,0,1.538.375,3.53,3.53,0,0,0,2-1.364,4.665,4.665,0,0,0,1.041-2.472,2.21,2.21,0,0,0-.827-2.084,2.342,2.342,0,0,0-1.6-.507,4.011,4.011,0,0,0-1.674.575Z" transform="translate(-260.077 -140.628)"/>
                                <path id="Path_6699" data-name="Path 6699" d="M290.825,310.6l1.28-1.321q-2.017.606-2.792-.145a1.143,1.143,0,0,1-.375-.782.908.908,0,0,1,.251-.718.821.821,0,0,1,.576-.263.747.747,0,0,1,.565.213,1.175,1.175,0,0,1,.289.709,1.173,1.173,0,0,0,.2.622.535.535,0,0,0,.375.115,4.3,4.3,0,0,0,1.436-.29l2.727-2.813a2.377,2.377,0,0,0,.592-.856.929.929,0,0,0-.013-.574,1.8,1.8,0,0,0-.5-.705l.224-.23,3.007,2.913-.224.233a1.749,1.749,0,0,0-.8-.508.76.76,0,0,0-.541.111,4.5,4.5,0,0,0-.636.591l-2.2,2.276a13.011,13.011,0,0,0-1.142,1.262.672.672,0,0,0-.123.434.6.6,0,0,0,.192.36,1.717,1.717,0,0,0,.542.339l-.16.294-2.472-1Z" transform="translate(-261.412 -141.675)"/>
                                <path id="Path_6700" data-name="Path 6700" d="M284.915,304.4a3.625,3.625,0,0,1-.826-3.193A4.335,4.335,0,0,1,285.6,298.7a5.22,5.22,0,0,1,2.045-1.019,3.743,3.743,0,0,1,3.989,1.242,3.473,3.473,0,0,1,.75,3.2,4.565,4.565,0,0,1-1.551,2.49,4.936,4.936,0,0,1-2.074,1,3.817,3.817,0,0,1-2.2-.076A3.771,3.771,0,0,1,284.915,304.4Zm.624-.158a1.871,1.871,0,0,0,.824.549,1.963,1.963,0,0,0,1.253-.039,4.72,4.72,0,0,0,1.581-.935,6.311,6.311,0,0,0,1.909-2.516,2.113,2.113,0,0,0-.2-2.266,1.743,1.743,0,0,0-1.464-.639,4.059,4.059,0,0,0-2.246,1.141,5.582,5.582,0,0,0-2.032,2.915A1.934,1.934,0,0,0,285.538,304.239Z" transform="translate(-262.486 -142.989)"/>
                                <path id="Path_6701" data-name="Path 6701" d="M276.7,299.716l8.982-6.08a2.919,2.919,0,0,0,.781-.662.789.789,0,0,0,.121-.5,1.962,1.962,0,0,0-.378-.79l.267-.18,2.247,3.318-.267.181a1.728,1.728,0,0,0-.526-.571.782.782,0,0,0-.5-.051,2.961,2.961,0,0,0-.915.48l-6.151,4.163a12.541,12.541,0,0,0-1.374,1.007.742.742,0,0,0-.246.407.526.526,0,0,0,.1.358,1.631,1.631,0,0,0,.448.407l-.174.3-2.193-1.459Z" transform="translate(-264.076 -144.301)"/>
                                <path id="Path_6702" data-name="Path 6702" d="M273.363,294.1l9.427-5.368a3.013,3.013,0,0,0,.828-.6.793.793,0,0,0,.16-.487,1.981,1.981,0,0,0-.317-.816l.28-.161,1.984,3.484-.28.158a1.723,1.723,0,0,0-.48-.609.771.771,0,0,0-.493-.089,2.976,2.976,0,0,0-.95.408l-6.454,3.675a12.687,12.687,0,0,0-1.447.9.751.751,0,0,0-.278.387.537.537,0,0,0,.076.364,1.671,1.671,0,0,0,.417.442l-.2.286-2.075-1.623Z" transform="translate(-264.803 -145.353)"/>
                                <path id="Path_6703" data-name="Path 6703" d="M281.155,282.116l-.314.1-.146-.431a1.2,1.2,0,0,0-.815-.872,2.747,2.747,0,0,0-1.313.237l-7.408,2.51a2.488,2.488,0,0,0-1.264.693,1.315,1.315,0,0,0-.04,1.106l.146.432-.312.1-1.582-4.668a10.729,10.729,0,0,1-.743-4.106,4.921,4.921,0,0,1,1.214-2.815,6.326,6.326,0,0,1,2.869-1.881,6.067,6.067,0,0,1,4.491.1,6.755,6.755,0,0,1,3.478,4.364Zm-1.939-2.992a9.133,9.133,0,0,0-.374-1.881,4.518,4.518,0,0,0-2.48-2.787,6.4,6.4,0,0,0-7.483,2.536,4.61,4.61,0,0,0-.244,3.786,7.554,7.554,0,0,0,.833,1.651Z" transform="translate(-266.113 -148.516)"/>
                                <path id="Path_6704" data-name="Path 6704" d="M267.608,267.431a3.616,3.616,0,0,1,.845-3.187A4.315,4.315,0,0,1,271,262.8a5.207,5.207,0,0,1,2.281.115,3.734,3.734,0,0,1,2.868,3.036,3.465,3.465,0,0,1-.916,3.158,4.563,4.563,0,0,1-2.571,1.409,4.968,4.968,0,0,1-2.3-.141,3.81,3.81,0,0,1-1.883-1.146A3.762,3.762,0,0,1,267.608,267.431Zm.62.168a1.849,1.849,0,0,0,.451.882,1.968,1.968,0,0,0,1.111.582,4.759,4.759,0,0,0,1.835-.04,6.318,6.318,0,0,0,2.9-1.259,2.112,2.112,0,0,0,.934-2.074,1.743,1.743,0,0,0-.962-1.274,4.057,4.057,0,0,0-2.516-.107,5.6,5.6,0,0,0-3.2,1.544A1.937,1.937,0,0,0,268.228,267.6Z" transform="translate(-266.073 -150.568)"/>
                                <path id="Path_6705" data-name="Path 6705" d="M266.819,262.83l-.128-3.426.33-.013a1.11,1.11,0,0,0,.194.614.5.5,0,0,0,.387.134,1.91,1.91,0,0,0,.665-.178l4.635-1.924-3.894-1.614-1.186.509a1.445,1.445,0,0,0-.718.588,1.646,1.646,0,0,0-.124.738l-.33.012-.146-3.888.329-.013a1.665,1.665,0,0,0,.267.9.549.549,0,0,0,.462.161,1.041,1.041,0,0,0,.364-.085l4.623-2.031-4.587-1.551a2.431,2.431,0,0,0-.776-.15.385.385,0,0,0-.3.185,1.288,1.288,0,0,0-.125.688l-.331.012-.1-2.577.329-.013a1.47,1.47,0,0,0,1.1,1.1l7.141,2.465.013.367-5.143,2.239,5.311,2.185.011.331-6.769,2.88a2.476,2.476,0,0,0-.86.542,1.719,1.719,0,0,0-.314.8Z" transform="translate(-266.334 -153.359)"/>
                                <path id="Path_6706" data-name="Path 6706" d="M268.319,246.2a3.858,3.858,0,0,1-1.428-2.908,1.973,1.973,0,0,1,.455-1.111,2.247,2.247,0,0,1,1.179-.645,5.077,5.077,0,0,1,1.654-.019l3.471.373a2.915,2.915,0,0,0,1.061-.012.721.721,0,0,0,.38-.278,1.764,1.764,0,0,0,.211-.789l.32.034-.431,4.021-.32-.035.017-.169a1.348,1.348,0,0,0-.088-.812.908.908,0,0,0-.476-.369,5.132,5.132,0,0,0-.83-.127L270.164,243a3.409,3.409,0,0,0-1.643.117,1.036,1.036,0,0,0-.605.918,2.939,2.939,0,0,0,.928,2.227l4.286.46a3.068,3.068,0,0,0,1.031.012.82.82,0,0,0,.414-.3,2.12,2.12,0,0,0,.214-.871l.32.034-.431,4.021-.321-.035.019-.175a.96.96,0,0,0-.224-.873,2.3,2.3,0,0,0-1.18-.347l-3.018-.324a13.154,13.154,0,0,0-1.791-.125.762.762,0,0,0-.457.157.568.568,0,0,0-.156.356,1.7,1.7,0,0,0,.071.61l-.335.1-.731-2.556.041-.382Z" transform="translate(-266.285 -155.339)"/>
                            </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/portfolio/Group 757.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <div class="container">
        <h2 class="title">Portfolio</h2>
        <div class="row g-4">
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Group 761.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Lanka Tiles Website</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Ceylon Beatz 2.png')}}" alt="">
                </div>
                <div class="content-block light">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Ceylon Beatz</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-3 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/SkyCard.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text"></div>
                    <h5 class="title"></h5>
                </div>
            </div>
            <div class="portfolio-block col-md-6 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Group 759.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text">Full system integrate</div>
                    <h5 class="title">Hotel Sapphire</h5>
                </div>
            </div>
            <div class="portfolio-block col-md-3 col-12">
                <div class="image-block">
                    <img src="{{url('images/portfolio/Component 2 – 1.png')}}" alt="">
                </div>
                <div class="content-block">
                    <div class="text"></div>
                    <h5 class="title"></h5>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.footer')

    
@endsection

