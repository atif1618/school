<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
    <!--begin::Header container-->
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
        </div>
        <!--end::Header mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-1 me-lg-13">
            <a href="{{url('admin/dashboard')}}">
                <img alt="Logo" src="{{asset('images/complete-logo.png')}}"
                    class="h-125px h-lg-125px theme-light-show" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                <!--begin::Menu holder-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-gray-900 menu-arrow-gray-500 fw-semibold fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0"
                        id="#kt_app_header_menu" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <a href="{{url('admin/dashboard')}}" wire:navigate1
                            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-outline ki-graph-3"></i>
                                </span>
                                <span class="menu-title">Dashboard</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                        </a>
                        <!--end:Menu item-->
                        <!--end:Menu item-->
                        <!--begin:Menu item-->

                        <a href="{{url('admin/users')}}" wire:navigate1
                            class="menu-item menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-outline ki-user"></i>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                        </a>


                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu holder-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::User menu-->
                <div class="app-navbar-item" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded p-2"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <!--begin::User-->
                        <div class="cursor-pointer symbol me-3 symbol-35px symbol-lg-45px">
                            <img class="" src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="user" />
                        </div>
                        <!--end::User-->
                        <!--begin:Info-->
                        <div class="me-4">
                            <a href="pages/user-profile/projects.html"
                                class="text-gray-900 text-hover-primary fs-6 fw-bold">{{Auth::user()->name}}</a>
                            <a href="pages/user-profile/overview.html"
                                class="text-gray-500 text-hover-primary fs-7 fw-bold d-block">{{Auth::user()->role}}</a>
                        </div>
                        <!--end:Info-->
                        <i class="ki-outline ki-down fs-2 text-gray-500 pt-1"></i>
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{asset('assets/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->name}}
                                        <span
                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{Auth::user()->role}}</span>
                                    </div>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{route('profile')}}" class="menu-link px-5">My Profile</a>
                        </div>

                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a wire:click="logout" class="menu-link px-5">Sign Out</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Sidebar menu toggle-->
                <!--end::Sidebar menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>