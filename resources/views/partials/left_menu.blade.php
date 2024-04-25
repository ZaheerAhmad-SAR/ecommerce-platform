  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard.index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-Attributes" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Attributes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-Attributes" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('attributes.index') }}">
              <i class="bi bi-circle"></i><span>Attributes</span>
            </a>
          </li>
          <li>
            <a href="{{ route('attributes.create') }}">
              <i class="bi bi-circle"></i><span>Create Attributes</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-Categories" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-Categories" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('categories.index') }}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ route('categories.create') }}">
              <i class="bi bi-circle"></i><span>Create Category</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

            <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-Products" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-Products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('products.index') }}">
              <i class="bi bi-circle"></i><span>Products</span>
            </a>
          </li>
          <li>
            <a href="{{ route('products.create') }}">
              <i class="bi bi-circle"></i><span>Create Products</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->
    </ul>

  </aside><!-- End Sidebar-->