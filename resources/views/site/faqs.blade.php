<section class="services-section" id="faqs" itemscope>
    <div class="container-fluid">
        <div class="services-div">
            <div class="heading-div">
                <h2>
                    FAQ
                </h2>
                <p></p>
            </div>
            <div class="services-root" itemprop="articleBody">
                @foreach($item->faqs as $faq)
                <p class="accordion">{{ $faq->question}}</p>
                <div class="panel-answer">{{ $faq->answer}}</div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@push('scripts')
<style>
    /* Style the element that is used to open and close the accordion class */
    p.accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
        margin-bottom: 10px;
    }

    /* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    p.accordion.active,
    p.accordion:hover {
        background-color: #ddd;
    }

    /* Unicode character for "plus" sign (+) */
    p.accordion:after {
        content: '\2795';
        font-size: 13px;
        color: #777;
        float: right;
        margin-left: 5px;
    }

    /* Unicode character for "minus" sign (-) */
    p.accordion.active:after {
        content: "\2796";
    }

    /* Style the element that is used for the panel class */

    div.panel-answer {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: 0.4s ease-in-out;
        opacity: 0;
        margin-bottom: 10px;
    }

    div.panel-answer.show {
        opacity: 1;
        max-height: 500px;
        /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
    }
</style>
@endpush
@push('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel-answer');
for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panel, 'show', 'remove');

        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}
function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}
});
</script>
@endpush