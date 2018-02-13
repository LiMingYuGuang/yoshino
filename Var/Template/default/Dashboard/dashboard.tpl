{{{include "_partial/header"}}}
<!-- Header -->
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <span mdui-drawer="{target: '#yoshino-drawer'}" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></span>
        <a href="{{{path 'index'}}}" class="mdui-typo-headline yoshino-headline">Yoshino</a>
        <a href="{{{path 'user'}}}" class="mdui-typo-title">{{{trans 'page.dashboard'}}}</a>
        <div class="mdui-toolbar-spacer"></div>
        <span style="padding-top: 2px;font-weight: 500;">{{username}}</span>
        <a class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#yoshino-user-menu'}"><i class="mdui-icon material-icons">more_vert</i></a>
        {{{include "_partial/user/menu"}}}
    </div>

</header>

<!-- Sidebar -->
{{{include "_partial/dashboard/sidebar"}}}

<!-- Content -->
<div class="mdui-container doc-container doc-no-cover">
    <h1 class="doc-title mdui-text-color-theme">{{{trans 'page.dashboard'}}}</h1>
    <div class="mdui-row">
        <div class="mdui-col-xs-6">
            <div class="mdui-card">
                <div class="mdui-card-primary">
                    <div class="mdui-card-primary-title">{{{trans 'dashboard.overview'}}}</div>
                    <div class="mdui-card-primary-subtitle">Overview</div>
                </div>
                <div class="mdui-card-content">
                    <div class="mdui-typo-headline">{{{trans 'dashboard.reg-user'}}}<span  class="mdui-float-right">{{{reg-user}}}</span></div>
                    <div class="mdui-divider"></div>
                    <div class="mdui-typo-headline">{{{trans 'dashboard.upload-texture'}}}<span  class="mdui-float-right">{{{upload-texture}}}</span></div>

                </div>
            </div>
        </div>
    </div>
</div>
{{{include "_partial/footer"}}}