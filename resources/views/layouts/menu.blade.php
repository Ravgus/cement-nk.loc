

<li class="{{ Request::is('admin') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-anchor"></i><span>Главная</span></a>
</li>

<li class="{{ Request::is('admin/chapters*') ? 'active' : '' }}">
    <a href="{!! route('chapters.index') !!}"><i class="fa fa-book"></i><span>Главы меню</span></a>
</li>

<li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-archive"></i><span>Продукция</span></a>
</li>

<li class="{{ Request::is('admin/contacts*') ? 'active' : '' }}">
    <a href="{!! route('contacts.index') !!}"><i class="fa fa-envelope"></i><span>Контакты</span></a>
</li>
