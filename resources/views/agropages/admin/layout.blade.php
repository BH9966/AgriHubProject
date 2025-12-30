<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    @include('agropages.admin.style')
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div> -->

                @include('agropages.admin.menuleft')
                @include('agropages.admin.content')
            </div>
        </div>
    </div>

    @include('agropages.admin.script')
</body>

</html>