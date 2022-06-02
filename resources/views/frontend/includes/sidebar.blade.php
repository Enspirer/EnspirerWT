        <div id="sectionSideNav" class="mobile">
            <div id="sideNav" class="side-nav">
                <div class="side-nav-brands">
                    <div class="side-nav-toggle">
                        <span class="toggle-btn bi bi-list"></span>
                    </div>
                    <a href="{{url('dashboard')}}" class="brand">
                        <div class="full-text">Tallentor</div>
                        <div class="short-text">T</div>
                    </a>
                </div>
                <div class="side-navs">
                    <ul class="navbar-nav">
                        <li class="nav-item" id="dashboard_sidebar">
                            <a class="nav-link {{Request::segment(1)=='dashboard' ? 'active' :null }}" href="{{route('frontend.user.dashboard')}}">
                                <i class="bi bi-columns-gap"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::segment(1)=='reports' ? 'active' :null }}" href="{{route('frontend.user.reports')}}">
                                <i class="bi bi-clipboard2-data"></i>
                                <span class="text">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="accordion" id="billingAcc">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="billingHead">
                                        <button class="nav-link {{Request::segment(1)=='billing' ? 'active' :null }} collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bililngCollapse" aria-expanded="true" aria-controls="bililngCollapse">
                                            <i class="bi bi-receipt"></i>
                                            <span class="text">Billing</span>
                                            <span class="alerts">{{count(App\Models\BillingInvoice::where('user_id',auth()->user()->id)->where('status','Pending')->get()) }}</span>
                                        </button>
                                    </h2>
                                    <div id="bililngCollapse" class="accordion-collapse collapse" aria-labelledby="billingHead" data-bs-parent="#billingAcc">
                                        <div class="accordion-body">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a href="{{route('frontend.user.billing')}}" class="nav-link {{Request::segment(2)=='project-invoice' ? 'active' :null }}">
                                                        <i class="bi bi-clipboard2-check"></i>
                                                        <span class="text">Project Invoice</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('frontend.user.custom_invoice')}}" class="nav-link {{Request::segment(2)=='custom-invoice' ? 'active' :null }}">
                                                        <i class="bi bi-file-earmark-plus"></i>
                                                        <span class="text">Custom Invoice</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::segment(1)=='projects' ? 'active' :null }}" href="{{route('frontend.user.project.index')}}">
                                <i class="bi bi-layers"></i>
                                <span class="text">Projects</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-tools"></i>
                                <span class="text">Tools</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::segment(1)=='settings' ? 'active' :null }}" href="{{route('frontend.user.settings.index')}}">
                                <i class="bi bi-gear"></i>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="side-nav-footer">
                    <span class="copyright">&copy; Tallentor.{{date('Y')}}</span>
                    <p class="theme">Tallentor - analytics platform for solution of all type of business
                    </p>
                </div>
            </div>
        </div>