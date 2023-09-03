<!DOCTYPE html>
<html lang="en">
    <x-frontend.partials.head/>

<body>
<x-frontend.partials.navber/>
   
    <div class="page-content">



               {{$slot}}

            </div>
            @php
                $webName = "www.google.com";
            @endphp
            <x-frontend.partials.footer :webName="$webName"/>
        </div>
    </div>
</body>

</html>