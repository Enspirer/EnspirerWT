<form action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class = "row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-9">
                            <h4>Explorer - Created at 2021/02/04 14.20.00H</h4>
                            <p>https://explorer.com/function</p>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <nav class="navbar navbar-expand-xl navbar-light w-100 p-0 bg-base-0 rounded shadow-sm">
                        <div class="d-flex align-items-center d-xl-none px-3 py-3 font-weight-medium text-muted">
                            Menu
                        </div>
                        <button class="navbar-toggler border-0 py-2 collapsed ml-auto" type="button" data-toggle="collapse" data-target="#reports-navbar" aria-controls="reports-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon my-1"></span>
                        </button>

                        <div class="collapse navbar-collapse border-top border-top-xl-0  scroll-margin-top-22 scroll-margin-top-lg-4 scroll-margin-top-xl-18 " id="reports-navbar">
                            <ul class="navbar-nav flex-wrap justify-content-around w-100">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center font-weight-medium py-3 px-3" href="#overview">
                                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 mr-2" viewBox="0 0 18 18"><path d="M9,6h4a1,1,0,0,0,0-2H9A1,1,0,0,0,9,6Zm0,4h4a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,4h4a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2ZM4,4H6V6H4ZM4,8H6v2H4Zm0,4H6v2H4ZM17,0H1A1,1,0,0,0,0,1V17a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V1A1,1,0,0,0,17,0ZM16,16H2V2H16Z"></path></svg></span>
                                        <span>Overview</span>
                                    </a>
                                </li>

                                <li class="border-right-lg "></li>

                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center font-weight-medium py-3 px-3" href="{{route('admin.projects.seo_report',$project->id)}}">
                                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 mr-2" viewBox="0 0 17.49 17.49"><path d="M12.5,11h-.79l-.28-.27a6.51,6.51,0,1,0-.7.7l.27.28v.79l5,5L17.49,16Zm-6,0A4.5,4.5,0,1,1,11,6.5,4.49,4.49,0,0,1,6.5,11Z"></path></svg></span>
                                        <span>SEO Report</span>
                                        <span class="badge badge-danger ml-2">3</span>
                                        <span class="badge badge-warning ml-2">1</span>
                                    </a>
                                </li>

                                <li class="border-right-lg "></li>

                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center font-weight-medium py-3 px-3" href="#performance">
                                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 mr-2" viewBox="0 0 19.97 15.96"><path d="M18.35,4.53,17.12,6.38A8,8,0,0,1,16.9,14H3A8,8,0,0,1,13.55,2.81L15.4,1.58A10,10,0,0,0,1.32,15,2,2,0,0,0,3,16H16.89a2,2,0,0,0,1.74-1,10,10,0,0,0-.27-10.44Z"></path><path d="M8.56,11.37a2,2,0,0,0,2.83,0h0l5.66-8.49L8.56,8.54a2,2,0,0,0,0,2.83Z"></path></svg></span>
                                        <span>Analytics</span>
                                        <span class="badge badge-warning ml-2">2</span>
                                        <span class="badge badge-secondary ml-2">1</span>
                                    </a>
                                </li>

                                <li class="border-right-lg "></li>

                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center font-weight-medium py-3 px-3" href="#security">
                                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 mr-2" viewBox="0 0 16 20"><path d="M6.5,11H4V8H6.5V5.5h3V8H12v3H9.5v2.5h-3ZM8,0,0,3V9.09C0,14.14,3.41,18.85,8,20c4.59-1.15,8-5.86,8-10.91V3Zm6,9.09a9.34,9.34,0,0,1-6,8.83A9.33,9.33,0,0,1,2,9.09V4.39L8,2.14l6,2.25Z"></path></svg></span>
                                        <span>Security</span>
                                    </a>
                                </li>

                                <li class="border-right-lg "></li>

                                <li class="nav-item ">
                                    <a class="nav-link d-flex align-items-center font-weight-medium py-3 px-3" href="#miscellaneous">
                                        <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current width-4 height-4 mr-2" viewBox="0 0 18 18"><path d="M16,2V16H2V2H16m0-2H2A2,2,0,0,0,0,2V16a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V2A2,2,0,0,0,16,0ZM9,9a3,3,0,1,1,3-3A3,3,0,0,1,9,9ZM9,5a1,1,0,1,0,1,1A1,1,0,0,0,9,5Zm6,10H3V13.47C3,11,7,9.89,9,9.89s6,1.08,6,3.58ZM5.31,13h7.38A7,7,0,0,0,9,11.88,7,7,0,0,0,5.31,13Z"></path></svg></span>
                                        <span>WidgetManager</span>
                                        <span class="badge badge-warning ml-2">1</span>
                                        <span class="badge badge-secondary ml-2">4</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div><br>

    </div>

</form>
