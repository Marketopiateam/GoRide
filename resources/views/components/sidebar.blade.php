
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
              fill="#7367F0" />
            <path
              opacity="0.06"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
              fill="#161616" />
            <path
              opacity="0.06"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
              fill="#161616" />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
              fill="#7367F0" />
          </svg>
        </span>
        <span class="app-brand-text demo menu-text fw-bold">{{ trans('panel.site_title') }}</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is("admin") ? "active" : "" }}">
            <a href="{{ route("admin.home") }}" class="menu-link">
              <div>{{ trans('global.dashboard') }}</div>
            </a>
          </li>
      <!-- Layouts -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
          <div data-i18n="Layouts">Layouts</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="layouts-collapsed-menu.html" class="menu-link">
              <div data-i18n="Collapsed menu">Collapsed menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-content-navbar.html" class="menu-link">
              <div data-i18n="Content navbar">Content navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
              <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="../horizontal-menu-template" class="menu-link" target="_blank">
              <div data-i18n="Horizontal">Horizontal</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-without-menu.html" class="menu-link">
              <div data-i18n="Without menu">Without menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-without-navbar.html" class="menu-link">
              <div data-i18n="Without navbar">Without navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-fluid.html" class="menu-link">
              <div data-i18n="Fluid">Fluid</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-container.html" class="menu-link">
              <div data-i18n="Container">Container</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-blank.html" class="menu-link">
              <div data-i18n="Blank">Blank</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>


{{-- <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="" class="">
                        <i class="fas fa-tv"></i>
                        
                    </a>
                </li>

                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.audit-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                                        </i>
                                        {{ trans('cruds.auditLog.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('coupon_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/coupons*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.coupons.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.coupon.title') }}
                        </a>
                    </li>
                @endcan
                @can('airport_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/airports*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.airports.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-plane">
                            </i>
                            {{ trans('cruds.airport.title') }}
                        </a>
                    </li>
                @endcan
                @can('cms_page_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/cms-pages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.cms-pages.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.cmsPage.title') }}
                        </a>
                    </li>
                @endcan
                @can('document_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.documents.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                            </i>
                            {{ trans('cruds.document.title') }}
                        </a>
                    </li>
                @endcan
                @can('driver_document_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/driver-documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.driver-documents.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.driverDocument.title') }}
                        </a>
                    </li>
                @endcan
                @can('driver_rule_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/driver-rules*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.driver-rules.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.driverRule.title') }}
                        </a>
                    </li>
                @endcan
                @can('driver_user_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/driver-users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.driver-users.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.driverUser.title') }}
                        </a>
                    </li>
                @endcan
                @can('freight_vehicle_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/freight-vehicles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.freight-vehicles.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.freightVehicle.title') }}
                        </a>
                    </li>
                @endcan
                @can('intercity_service_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/intercity-services*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.intercity-services.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.intercityService.title') }}
                        </a>
                    </li>
                @endcan
                @can('on_boarding_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/on-boardings*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.on-boardings.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.onBoarding.title') }}
                        </a>
                    </li>
                @endcan
                @can('orders_intercity_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/orders-intercities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.orders-intercities.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.ordersIntercity.title') }}
                        </a>
                    </li>
                @endcan
                @can('referral_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/referrals*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.referrals.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.referral.title') }}
                        </a>
                    </li>
                @endcan
                @can('review_customer_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/review-customers*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.review-customers.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-eye">
                            </i>
                            {{ trans('cruds.reviewCustomer.title') }}
                        </a>
                    </li>
                @endcan
                @can('review_driver_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/review-drivers*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.review-drivers.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.reviewDriver.title') }}
                        </a>
                    </li>
                @endcan
                @can('service_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/services*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.services.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.service.title') }}
                        </a>
                    </li>
                @endcan
                @can('so_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/sos*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.sos.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.so.title') }}
                        </a>
                    </li>
                @endcan
                @can('vehicle_type_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/vehicle-types*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.vehicle-types.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.vehicleType.title') }}
                        </a>
                    </li>
                @endcan
                @can('wallet_transaction_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/wallet-transactions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.wallet-transactions.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.walletTransaction.title') }}
                        </a>
                    </li>
                @endcan
                @can('chat_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/chats*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.chats.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.chat.title') }}
                        </a>
                    </li>
                @endcan
                @can('thread_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/threads*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.threads.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.thread.title') }}
                        </a>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/currencies*")||request()->is("admin/faqs*")||request()->is("admin/languages*")||request()->is("admin/taxes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.setting.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('currency_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/currencies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.currencies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-dollar-sign">
                                        </i>
                                        {{ trans('cruds.currency.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('faq_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faqs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faqs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.faq.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('language_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/languages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.languages.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.language.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('tax_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/taxes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.taxes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.tax.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('orders_m_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/orders*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.ordersM.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('order_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/orders*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.orders.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fab fa-first-order-alt">
                                        </i>
                                        {{ trans('cruds.order.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

               

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}