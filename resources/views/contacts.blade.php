@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h2>Контакты</h2>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="background: rgba(255,255,255,0.4); padding-top: 15px">
                <div class="col-md-8">
                            <iframe width="560" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                        </div>

                <div class="col-md-4">
                            <h2>Контакты</h2>
                            <address>
                                <strong>г.Днепр</strong><br>
                                ул.Ореховая д.19<br>
                                <abbr title="Phone">Т:</abbr> 0984841227
                            </address>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
