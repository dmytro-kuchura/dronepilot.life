<div class="widget widget-10 has-shadow">

    <div class="widget-header bordered d-flex align-items-center">
        <h2>Последние комментарии</h2>
        <div class="widget-options">
            <div class="dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="dropdown-toggle">
                    <i class="la la-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <i class="la la-bell-slash"></i>Весь список
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="widget-body no-padding">
        <ul class="ticket list-group w-100">
            @if(count($result))
                @foreach($result as $obj)
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left align-self-center pr-4">
                                <img src="/images/avatar-placeholder.png" class="user-img rounded-circle" alt="...">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="username">
                                    <h4>{{ $obj->name }}</h4>
                                </div>
                                <div class="msg">
                                    <p>{{ $obj->message }}</p>
                                </div>
                                <div class="status"><span class="open mr-2">Posted: </span>(1 hour ago)</div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
