<script setup>
const props = defineProps({
  menu: Array,
});
</script>

<template>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container-fluid" data-layout="container">
      <nav
        class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-vibrant"
      >
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button
              class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
              data-bs-toggle="tooltip"
              data-bs-placement="left"
              title="Toggle Navigation"
            >
              <span class="navbar-toggle-icon"
              ><span class="toggle-line"></span
              ></span>
            </button>
          </div>
          <a class="navbar-brand" href="../index.html">
            <div class="d-flex align-items-center py-3">
              <img
                class="me-2"
                src="/myCms/assets/img/icons/spot-illustrations/falcon.png"
                alt=""
                width="40"
              /><span class="font-sans-serif">falcon</span>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
              <li class="nav-item">
                <!-- parent pages--><a
                class="nav-link dropdown-indicator"
                href="#dashboard"
                role="button"
                data-bs-toggle="collapse"
                aria-expanded="false"
                aria-controls="dashboard"
              >
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                    ><span class="fas fa-chart-pie"></span></span
                    ><span class="nav-link-text ps-1">Dashboard</span>
                </div>
              </a>
                <ul class="nav collapse false" id="dashboard">
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../index.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">Default</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../dashboard/analytics.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">Analytics</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../dashboard/crm.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">CRM</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../dashboard/e-commerce.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">E commerce</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../dashboard/project-management.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">Management</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="../dashboard/saas.html"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">SaaS</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <!-- label-->
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                  <div class="col-auto navbar-vertical-label">Modules</div>
                  <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider"/>
                  </div>
                </div>
                <!-- parent pages--><a
                class="nav-link"
                href="../app/calendar.html"
                role="button"
                aria-expanded="false"
              >
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                    ><span class="fas fa-calendar-alt"></span></span
                    ><span class="nav-link-text ps-1">Calendar</span>
                </div>
              </a>
                <!-- parent pages--><a
                class="nav-link"
                href="../app/chat.html"
                role="button"
                aria-expanded="false"
              >
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"
                    ><span class="fas fa-comments"></span></span
                    ><span class="nav-link-text ps-1">Chat</span>
                </div>
              </a>

                <!-- parent pages-->
                <a
                  class="nav-link dropdown-indicator"
                  href="#dummy"
                  role="button"
                  data-bs-toggle="collapse"
                  aria-expanded="false"
                  aria-controls="dummy"
                >
                  <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                      <span class="fas fa-share-alt"></span>
                    </span>
                    <span class="nav-link-text ps-1">Dummies</span>
                  </div>
                </a>
                <ul class="nav collapse false" id="dummy">
                  <li class="nav-item">
                    <Link
                      :href="route('admin.dummies.index')"
                      class="nav-link"
                      aria-expanded="false"
                    >
                      <div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1"> Index </span>
                      </div>
                    </Link>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </li>
            </ul>
            <div class="settings mb-3">
              <div class="card alert p-0 shadow-none" role="alert">
                <div class="btn-close-falcon-container">
                  <div
                    class="btn-close-falcon"
                    aria-label="Close"
                    data-bs-dismiss="alert"
                  ></div>
                </div>
                <div class="card-body text-center">
                  <img
                    src="/myCms/assets/img/icons/spot-illustrations/navbar-vertical.png"
                    alt=""
                    width="80"
                  />
                  <p class="fs--2 mt-2">
                    Loving what you see? <br/>Get your copy of
                    <a href="#!">Falcon</a>
                  </p>
                  <div class="d-grid">
                    <a
                      class="btn btn-sm btn-purchase"
                      href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                      target="_blank"
                    >Purchase</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
          <button
            class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarVerticalCollapse"
            aria-controls="navbarVerticalCollapse"
            aria-expanded="false"
            aria-label="Toggle Navigation"
          >
            <span class="navbar-toggle-icon"
            ><span class="toggle-line"></span
            ></span>
          </button>
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center">
              <img
                class="me-2"
                src="/myCms/assets/img/icons/spot-illustrations/falcon.png"
                alt=""
                width="40"
              /><span class="font-sans-serif">falcon</span>
            </div>
          </a>
          <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
              <div class="search-box" data-list='{"valueNames":["title"]}'>
                <form
                  class="position-relative"
                  data-bs-toggle="search"
                  data-bs-display="static"
                >
                  <input
                    class="form-control search-input fuzzy-search"
                    type="search"
                    placeholder="Search..."
                    aria-label="Search"
                  />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
                <div
                  class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                  data-bs-dismiss="search"
                >
                  <div class="btn-close-falcon" aria-label="Close"></div>
                </div>
                <div
                  class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100"
                >
                  <div class="scrollbar list py-3" style="max-height: 24rem">
                    <h6
                      class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2"
                    >
                      Recently Browsed
                    </h6>
                    <a
                      class="dropdown-item fs--1 px-card py-1 hover-primary"
                      href="../app/events/event-detail.html"
                    >
                      <div class="d-flex align-items-center">
                        <span class="fas fa-circle me-2 text-300 fs--2"></span>

                        <div class="fw-normal title">
                          Pages
                          <span
                            class="fas fa-chevron-right mx-1 text-500 fs--2"
                            data-fa-transform="shrink-2"
                          ></span>
                          Events
                        </div>
                      </div>
                    </a>
                    <a
                      class="dropdown-item fs--1 px-card py-1 hover-primary"
                      href="../app/e-commerce/customers.html"
                    >
                      <div class="d-flex align-items-center">
                        <span class="fas fa-circle me-2 text-300 fs--2"></span>

                        <div class="fw-normal title">
                          E-commerce
                          <span
                            class="fas fa-chevron-right mx-1 text-500 fs--2"
                            data-fa-transform="shrink-2"
                          ></span>
                          Customers
                        </div>
                      </div>
                    </a>

                    <hr class="bg-200 dark__bg-900"/>
                    <h6
                      class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2"
                    >
                      Suggested Filter
                    </h6>
                    <a
                      class="dropdown-item px-card py-1 fs-0"
                      href="../app/e-commerce/customers.html"
                    >
                      <div class="d-flex align-items-center">
                        <span
                          class="badge fw-medium text-decoration-none me-2 badge-soft-warning"
                        >customers:</span
                        >
                        <div class="flex-1 fs--1 title">All customers list</div>
                      </div>
                    </a>
                    <a
                      class="dropdown-item px-card py-1 fs-0"
                      href="../app/events/event-detail.html"
                    >
                      <div class="d-flex align-items-center">
                        <span
                          class="badge fw-medium text-decoration-none me-2 badge-soft-success"
                        >events:</span
                        >
                        <div class="flex-1 fs--1 title">
                          Latest events in current month
                        </div>
                      </div>
                    </a>
                    <a
                      class="dropdown-item px-card py-1 fs-0"
                      href="../app/e-commerce/product/product-grid.html"
                    >
                      <div class="d-flex align-items-center">
                        <span
                          class="badge fw-medium text-decoration-none me-2 badge-soft-info"
                        >products:</span
                        >
                        <div class="flex-1 fs--1 title">
                          Most popular products
                        </div>
                      </div>
                    </a>

                    <hr class="bg-200 dark__bg-900"/>
                    <h6
                      class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2"
                    >
                      Files
                    </h6>
                    <a class="dropdown-item px-card py-2" href="#!">
                      <div class="d-flex align-items-center">
                        <div class="file-thumbnail me-2">
                          <img
                            class="border h-100 w-100 fit-cover rounded-3"
                            src="/myCms/assets/img/products/3-thumb.png"
                            alt=""
                          />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 title">iPhone</h6>
                          <p class="fs--2 mb-0 d-flex">
                            <span class="fw-semi-bold">Antony</span
                            ><span class="fw-medium text-600 ms-2"
                          >27 Sep at 10:30 AM</span
                          >
                          </p>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item px-card py-2" href="#!">
                      <div class="d-flex align-items-center">
                        <div class="file-thumbnail me-2">
                          <img
                            class="img-fluid"
                            src="/myCms/assets/img/icons/zip.png"
                            alt=""
                          />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 title">Falcon v1.8.2</h6>
                          <p class="fs--2 mb-0 d-flex">
                            <span class="fw-semi-bold">John</span
                            ><span class="fw-medium text-600 ms-2"
                          >30 Sep at 12:30 PM</span
                          >
                          </p>
                        </div>
                      </div>
                    </a>

                    <hr class="bg-200 dark__bg-900"/>
                    <h6
                      class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2"
                    >
                      Members
                    </h6>
                    <a
                      class="dropdown-item px-card py-2"
                      href="../pages/user/profile.html"
                    >
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-l status-online me-2">
                          <img
                            class="rounded-circle"
                            src="/myCms/assets/img/team/1.jpg"
                            alt=""
                          />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 title">Anna Karinina</h6>
                          <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                        </div>
                      </div>
                    </a>
                    <a
                      class="dropdown-item px-card py-2"
                      href="../pages/user/profile.html"
                    >
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-l me-2">
                          <img
                            class="rounded-circle"
                            src="/myCms/assets/img/team/2.jpg"
                            alt=""
                          />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 title">Antony Hopkins</h6>
                          <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                        </div>
                      </div>
                    </a>
                    <a
                      class="dropdown-item px-card py-2"
                      href="../pages/user/profile.html"
                    >
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-l me-2">
                          <img
                            class="rounded-circle"
                            src="/myCms/assets/img/team/3.jpg"
                            alt=""
                          />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 title">Emma Watson</h6>
                          <p class="fs--2 mb-0 d-flex">Google</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="text-center mt-n3">
                    <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul
            class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center"
          >
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input
                  class="form-check-input ms-0 theme-control-toggle-input"
                  id="themeControlToggle"
                  type="checkbox"
                  data-theme-control="theme"
                  value="dark"
                />
                <label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                  for="themeControlToggle"
                  data-bs-toggle="tooltip"
                  data-bs-placement="left"
                  title="Switch to light theme"
                ><span class="fas fa-sun fs-0"></span
                ></label>
                <label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                  for="themeControlToggle"
                  data-bs-toggle="tooltip"
                  data-bs-placement="left"
                  title="Switch to dark theme"
                ><span class="fas fa-moon fs-0"></span
                ></label>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="../app/e-commerce/shopping-cart.html"
              ><span
                class="fas fa-shopping-cart"
                data-fa-transform="shrink-7"
                style="font-size: 33px"
              ></span
              ><span class="notification-indicator-number">1</span></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              ><span
                class="fas fa-bell"
                data-fa-transform="shrink-6"
                style="font-size: 33px"
              ></span
              ></a>
              <div
                class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                aria-labelledby="navbarDropdownNotification"
              >
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3">
                        <a class="card-link fw-normal" href="#"
                        >Mark all as read</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height: 19rem">
                    <div class="list-group list-group-flush fw-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a
                          class="notification notification-flush notification-unread"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img
                                class="rounded-circle"
                                src="/myCms/assets/img/team/1-thumb.png"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>Emma Watson</strong> replied to your
                              comment : "Hello world ????"
                            </p>
                            <span class="notification-time"
                            ><span class="me-2" role="img" aria-label="Emoji"
                            >????</span
                            >Just now</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="notification notification-flush notification-unread"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle">
                                <span>AB</span>
                              </div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>Albert Brooks</strong> reacted to
                              <strong>Mia Khalifa's</strong> status
                            </p>
                            <span class="notification-time"
                            ><span
                              class="me-2 fab fa-gratipay text-danger"
                            ></span
                            >9hr</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img
                                class="rounded-circle"
                                src="/myCms/assets/img/icons/weather-sm.jpg"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              The forecast today shows a low of 20&#8451; in
                              California. See today's weather.
                            </p>
                            <span class="notification-time"
                            ><span class="me-2" role="img" aria-label="Emoji"
                            >???????</span
                            >1d</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="border-bottom-0 notification-unread notification notification-flush"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img
                                class="rounded-circle"
                                src="/myCms/assets/img/logos/oxford.png"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>University of Oxford</strong> created an
                              event : "Causal Inference Hilary 2019"
                            </p>
                            <span class="notification-time"
                            ><span class="me-2" role="img" aria-label="Emoji"
                            >??????</span
                            >1w</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="border-bottom-0 notification notification-flush"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img
                                class="rounded-circle"
                                src="/myCms/assets/img/team/10.jpg"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>James Cameron</strong> invited to join the
                              group: United Nations International Children's
                              Fund
                            </p>
                            <span class="notification-time"
                            ><span class="me-2" role="img" aria-label="Emoji"
                            >???????</span
                            >2d</span
                            >
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top">
                    <a
                      class="card-link d-block"
                      href="../app/social/notifications.html"
                    >View all</a
                    >
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link pe-0"
                id="navbarDropdownUser"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar avatar-xl">
                  <img
                    class="rounded-circle"
                    src="/myCms/assets/img/team/3-thumb.png"
                    alt=""
                  />
                </div>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser"
              >
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"
                  ><span class="fas fa-crown me-1"></span
                  ><span>Go Pro</span></a
                  >

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../pages/user/profile.html"
                  >Profile &amp; account</a
                  >
                  <a class="dropdown-item" href="#!">Feedback</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../pages/user/settings.html"
                  >Settings</a
                  >
                  <a
                    class="dropdown-item"
                    href="../pages/authentication/card/logout.html"
                  >Logout</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <slot></slot>
        <footer class="footer">
          <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">
                Thank you for creating with Falcon
                <span class="d-none d-sm-inline-block">| </span
                ><br class="d-sm-none"/>
                2021 &copy; <a href="https://themewagon.com">Themewagon</a>
              </p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v3.4.0</p>
            </div>
          </div>
        </footer>
      </div>
      <div
        class="modal fade"
        id="authentication-modal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="authentication-modal-label"
        aria-hidden="true"
      >
        <div class="modal-dialog mt-6" role="document">
          <div class="modal-content border-0">
            <div
              class="modal-header px-5 position-relative modal-shape-header bg-shape"
            >
              <div class="position-relative z-index-1 light">
                <h4 class="mb-0 text-white" id="authentication-modal-label">
                  Register
                </h4>
                <p class="fs--1 mb-0 text-white">
                  Please create your free Falcon account
                </p>
              </div>
              <button
                class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body py-4 px-5">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="modal-auth-name">Name</label>
                  <input
                    class="form-control"
                    type="text"
                    autocomplete="on"
                    id="modal-auth-name"
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="modal-auth-email"
                  >Email address</label
                  >
                  <input
                    class="form-control"
                    type="email"
                    autocomplete="on"
                    id="modal-auth-email"
                  />
                </div>
                <div class="row gx-2">
                  <div class="mb-3 col-sm-6">
                    <label class="form-label" for="modal-auth-password"
                    >Password</label
                    >
                    <input
                      class="form-control"
                      type="password"
                      autocomplete="on"
                      id="modal-auth-password"
                    />
                  </div>
                  <div class="mb-3 col-sm-6">
                    <label class="form-label" for="modal-auth-confirm-password"
                    >Confirm Password</label
                    >
                    <input
                      class="form-control"
                      type="password"
                      autocomplete="on"
                      id="modal-auth-confirm-password"
                    />
                  </div>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="modal-auth-register-checkbox"
                  />
                  <label class="form-label" for="modal-auth-register-checkbox"
                  >I accept the <a href="#!">terms </a>and
                    <a href="#!">privacy policy</a></label
                  >
                </div>
                <div class="mb-3">
                  <button
                    class="btn btn-primary d-block w-100 mt-3"
                    type="submit"
                    name="submit"
                  >
                    Register
                  </button>
                </div>
              </form>
              <div class="position-relative mt-5">
                <hr class="bg-300"/>
                <div class="divider-content-center">or register with</div>
              </div>
              <div class="row g-2 mt-2">
                <div class="col-sm-6">
                  <a
                    class="btn btn-outline-google-plus btn-sm d-block w-100"
                    href="#"
                  ><span
                    class="fab fa-google-plus-g me-2"
                    data-fa-transform="grow-8"
                  ></span>
                    google</a
                  >
                </div>
                <div class="col-sm-6">
                  <a
                    class="btn btn-outline-facebook btn-sm d-block w-100"
                    href="#"
                  ><span
                    class="fab fa-facebook-square me-2"
                    data-fa-transform="grow-8"
                  ></span>
                    facebook</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="test_spinn"></div>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
</template>
<style>
/*.test_spinn{*/
/*width: 1623px;*/
/*height: calc(100% - 86px);*/
/*background: #0d6efd;*/
/*position: fixed;*/
/*top: 70px;*/
/*z-index: 5000;*/
/*right: 16px;*/
/*border-radius: 0.375rem;*/
/*}*/
/*#nprogress .spinner {*/
/*  position: fixed;*/
/*  top: 70px !important;*/
/*  bottom: 0 !important;*/
/*  right: 16px !important;*/

/*  width: 1623px !important;*/
/*  height: calc(100% - 86px) !important;*/

/*  border-radius: 0.375rem;*/
/*  background: #0a17279e;*/
/*  display: flex !important;*/
/*  align-items: center !important;*/
/*  justify-content: center !important;*/
/*}*/

/*#nprogress .spinner-icon {*/
/*  width: 80px !important;*/
/*  height: 80px !important;*/
/*  border-top-color: #f5803e !important;*/
/*  border-left-color: #f5803e !important;*/

/*}*/
</style>
