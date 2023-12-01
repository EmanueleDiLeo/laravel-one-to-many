<aside class="bg-dark">
     <nav>
         <ul>
            <li><a href="{{ route('admin.home')}}" @class(['active' => Route::is('admin.home')])>Dashboard</a></li>
            <li><a href="{{ route('admin.projects.index')}}" @class(['active' => Route::is('admin.projects.index')])>Lista Progetti</a></li>
            <li><a href="{{ route('admin.technologies.index')}}" @class(['active' => Route::is('admin.technologies.index')])>Lista Tecnologie</a></li>
            <li><a href="{{ route('admin.types.index')}}" @class(['active' => Route::is('admin.types.index')])>Lista Tipi</a></li>
         </ul>
     </nav>
</aside>
