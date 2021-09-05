<div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                {{auth()->user()->full_name}}
                            </a>
                            
                            <a class="nav-link" href="{{route('dashboard.dash')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('tenants.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Tenants
                            </a>
                            <a class="nav-link" href="{{route('landlords.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Landlords
                            </a>
                          
                            
                            <a class="nav-link" href="{{route('apartments.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Apartmnets
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Houses
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('houses.listall')}}">List All</a>
                                    <a class="nav-link" href="{{route('houses.listvacant')}}">List Vacant</a>
                                    <a class="nav-link" href="{{route('houses.listoccupied')}}">List Occupied</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Deposite Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('depositereports.alldeposites')}}">All Deposites</a>
                                    <a class="nav-link" href="{{route('depositereports.sumbyapartments')}}">Sum by Apartments</a>
                                    <a class="nav-link" href="{{route('depositereports.sortbyapartments')}}">Sort by Apartments</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Placement Fees
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('placementfees.viewbymonth')}}">View by Month</a>
                                    <a class="nav-link" href="{{route('placementfees.viewbyapartments')}}">View by Apartments</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts6">
                                <div class="sb-nav-link-icon"><i class="fab fa-speakap"></i></div>
                                Incomes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('incomes.companyincome')}}">Company Income</a>
                                    <a class="nav-link" href="{{route('incomes.landlordsincome')}}">Landlords Income</a>
                                    
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('invoices.invoice')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Invoices
                            </a>
                            <a class="nav-link" href="{{route('user.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Users
                            </a>
                            
                            
                            