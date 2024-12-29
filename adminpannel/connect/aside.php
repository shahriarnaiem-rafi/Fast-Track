<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="../assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Admin</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false">
        <li class="nav-item menu-open">


          <a href="./index.php" class="nav-link active">
            <i class="fa-solid fa-gauge"></i>
            <p>Dashboard v1</p>
          </a>

        </li>
        <!-- User Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-people-roof"></i>
            <p>
              User Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>User Section</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Customer Section</p>
              </a>
            </li>
          </ul>
        </li>






        <!-- Dalybary  Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-truck"></i>
            <p>
              Delivery Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Order list</p>
                <!-- Order list : Order List: A table with columns like order ID, customer name, pickup location, delivery location, status, etc.-->
              </a>
            </li>
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Status Updates</p>
                <!-- Update delivery status (e.g., pending, in transit, delivered).-->
              </a>
            </li>
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Assign Drivers</p>
                <!-- Assign delivery staff or vehicles to specific orders.-->
              </a>
            </li>
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Tracking Info</p>
                <!--  Update or view tracking numbers for shipments.-->
              </a>
            </li>
          </ul>
        </li>
        <!-- ENd this section -->

        <!-- Driver Management -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-regular fa-id-card"></i>
            <p>
              Driver Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link transection-history'">
                <i class="nav-icon bi bi-circle"></i>
                <p>Drivers</p>
                <!-- Add and manage driver profiles.
View drivers' availability and performance metrics (e.g., completed deliveries).
Assign tasks to drivers. -->
              </a>
            </li>
          </ul>
        </li>

        <!-- Financial Management -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-solid fa-coins"></i>
            <p>
              Financial Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link transection-history'">
                <i class="fa-solid fa-money-bill"></i>
                <p>Payments</p>
                <!-- View payment history from customers.
Generate invoices for completed deliveries.
Handle driver payments and commissions.
Display profit/loss analytics. -->
              </a>
            </li>
          </ul>
        </li>



        <!-- Customer Suport -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-solid fa-handshake-angle"></i>
            <p>
              Customer Suport
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link transection-history'">
                <i class="fa-solid fa-handshake-angle"></i>
                <p>Suport</p>
                <!-- View and manage customer queries or complaints.
Respond to queries directly from the admin panel. -->
              </a>
            </li>
          </ul>
        </li>
        <!-- Settings -->

        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
          <i class="fa-solid fa-gear"></i>
            <p>
              Settings
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link transection-history'">
              <i class="fa-solid fa-gear"></i>
                <p>Settings</p>
                <!-- Change admin profile details.
Configure service zones (areas your courier service covers).
Set delivery charges or pricing models (e.g., per km or flat rate).
Manage notification settings (email/SMS alerts for delivery updates). -->
              </a>
            </li>
          </ul>
        </li>




        <!-- form -->

        <!-- <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="nav-icon bi bi-pencil-square"></i>
            <p>
              Forms
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link transection-history'">
                <i class="nav-icon bi bi-circle"></i>
                <p>General Elements</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-table"></i>
            <p>
              Tables
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Simple Tables</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-in-right"></i>
            <p>
              Auth
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                <p>
                  Version 1
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./examples/login.php" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Login</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./examples/registration.php" class="nav-link">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Register</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="./docs/browser-support.html" class="nav-link">
            <i class="nav-icon bi bi-browser-edge"></i>
            <p>Browser Support</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="./docs/faq.html" class="nav-link">
            <i class="nav-icon bi bi-question-circle-fill"></i>
            <p>FAQ</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./docs/license.html" class="nav-link">
            <i class="nav-icon bi bi-patch-check-fill"></i>
            <p>License</p>
          </a>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>