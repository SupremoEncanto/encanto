<!--BEGIN SIDEBAR MENU-->
<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
data-position="right" class="navbar-default navbar-static-side">
<div class="sidebar-collapse menu-scroll">
<ul id="side-menu" class="nav">
    
     <div class="clearfix"></div>
    <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="/"><i class="fa fa-home fa-fw">
        <div class="icon-bg bg-orange"></div>
    </i><span class="menu-title">Home</span></a></li>
    <li {{{ (Request::is('coristas') ? 'class=active' : '') }}}{{{ (Request::is('coristas/*') ? 'class=active' : '') }}}><a href="{{ url('coristas')  }}"><i class="fa fa-group fa-fw">
        <div class="icon-bg bg-pink"></div>
    </i><span class="menu-title">Coristas</span></a>
       
    </li>
    <li {{{ (Request::is('chamada') ? 'class=active' : '') }}}><a href="chamada"><i class="fa fa-list-alt fa-fw">
        <div class="icon-bg bg-green"></div>
    </i><span class="menu-title">Chamada</span></a>
       
    </li>
    
    <li {{{ (Request::is('financas') ? 'class=active' : '') }}}><a href="#"><i class="fa fa-money fa-fw">
        <div class="icon-bg bg-orange"></div>
    </i><span class="menu-title">Finanças</span></a>
       
    </li>
    <li {{{ (Request::is('ensaios') ? 'class=active' : '') }}}><a href="#"><i class="fa fa-music fa-fw">
        <div class="icon-bg bg-green"></div>
    </i><span class="menu-title">Ensaios</span></a></li>
</ul>
</div>
</nav>
<!--END SIDEBAR MENU-->