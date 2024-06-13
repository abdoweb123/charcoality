@extends('Client.layouts.layout')
@section('content')



@include('Client.layouts.breadcrumb',['Page'=>__('trans.faq')])

<main>

    <section class="faq container">
        <div class="faq-container">
            @foreach ($FAQ as $item)              
                <details class="faq-box" open>
                    <summary class="faq-header">
                        {{ $item['question_'.lang()] }}
                    </summary>
                    <div class="faq-content">
                        <p>
                            
                        {{ $item['answer_'.lang()] }}
                        </p>
                    </div>
                </details>
            @endforeach
        </div>
    </section>

</main>


@endsection


@push('css')
<style>
    main {

        display: flex;
        justify-content: center;
        align-items: center;

        padding: 1rem;
    }


    section.faq {


        width: 100%;
        border-radius: 12px;
        padding: 2em;

        background-color: white;
        box-shadow: 2px 2px 15px 4px rgba(0, 0, 0, 0.2);
    }


    .faq-container {
        display: grid;
        gap: 1em;
    }

    .faq-header {
        padding: 1.2em 1em;

        font-weight: 600;

        background-color: whitesmoke;

        user-select: none;
        cursor: pointer;
    }

    .faq-content {
        padding: 1em;
    }

</style>
@endpush
