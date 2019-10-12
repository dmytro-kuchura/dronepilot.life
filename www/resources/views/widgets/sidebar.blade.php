<div class="col-xl-2 col-lg-3 col-xl-20per">
    <div class="sidebar-block">
        @widget('Categories')
        @widget('Tags')
        @widget('Popular')

        @if(config('app.env') !== 'local')
            <div class="sidebar-box sidebar-item sidebar-item-wide"><span class="opener plus"></span>
                <div class="sidebar-contant">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Правый блок -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-3428447687354562"
                         data-ad-slot="1989135259"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        @endif

    </div>
</div>
