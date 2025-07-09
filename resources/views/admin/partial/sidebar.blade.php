 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="" class="app-brand-link">
             <span class="app-brand-logo demo">
                 <img src="{{ asset('assets/img/icofa_8th_logo_alt.png') }}" width="200" alt="Logo">
             </span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <!-- Tables -->
         <li class="menu-item {{ Route::is('panels.*') ? 'active' : '' }}">
             <a href="{{ route('panels.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-table"></i>
                 <div data-i18n="Tables">Panel</div>
             </a>
         </li>
         <li class="menu-item  {{ Route::is('admin_download.index') ? 'active' : '' }}">
             <a href="{{ route('admin_download.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-download"></i>
                 <div data-i18n="Tables">Download</div>
             </a>
         </li>
         <li class="menu-item {{ Route::is('sessions.*') ? 'active' : '' }}">
             <a href="{{ route('sessions.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-calendar"></i>
                 <div data-i18n="Tables">Session</div>
             </a>
         </li>
         <li class="menu-item {{ Route::is('papers.*') ? 'active' : '' }}">
             <a href="{{ route('papers.index') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-file"></i>
                 <div data-i18n="Tables">Paper</div>
             </a>
         </li>
     </ul>
 </aside>
