<div class="bg-white p-5 border-2 rounded-2xl font-medium">
        <div class="transition hover:bg-indigo-50">
        <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
            <i class="fas fa-plus"></i>
            <h3>Web scraping is hacking?</h3>
        </div>
        <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
            <p class="leading-6 font-light pl-9 text-justify">
            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
            far daughter.
            </p>
        </div>
        </div>
</div>

<div class="grid grid-cols-2 divide-x pt-16">
		<div class="bg-white">
			<div class="items-center md:py-10 ">
				<img src="http://localhost/ci/assets/3.4.png">
			</div>
		</div>
		<div class="bg-white py-32 xl:px-20">
			<div class="grid grid-cols-1 divide-y xl:my-10  space-y-4">
				<div class="bg-white p-5 border-2 rounded-2xl font-medium">
					<div class="transition hover:bg-indigo-50">
						<div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
							<i class="fas fa-plus"></i>
							<h3>Web scraping is hacking?</h3>
						</div>
						<div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
							<p class="leading-6 font-light pl-9 text-justify">
								Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
								far daughter.
							</p>
						</div>
					</div>
				</div>

</div>
<div class="bg-white p-5 border-2 rounded-2xl font-medium">
        <div class="transition hover:bg-indigo-50">
        <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
            <i class="fas fa-plus"></i>
            <h3>Web scraping is hacking?</h3>
        </div>
        <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
            <p class="leading-6 font-light pl-9 text-justify">
            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
            far daughter.
            </p>
        </div>
        </div>
</div>


<style>
div.accordion-content {
    display: none;
}

div.accordion-content.show {
    display: block !important;
}
</style>

<script>
var acc = document.getElementsByClassName("accordion-header");
var panel = document.getElementsByClassName('accordion-content');

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

</script>


</body>
</html>

    <script>
        function accordion() {
            return {
                selected: null
            }
        }
    </script>
    </div>

</body>

</html>












<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />


<style>
    .accordion-content {
    transition: max-height 0.3s ease-out, padding 0.3s ease;
    }
</style>

<script>
    const accordionHeader = document.querySelectorAll(".accordion-header");
    accordionHeader.forEach((header) => {
    header.addEventListener("click", function () {
        const accordionContent = header.parentElement.querySelector(".accordion-content");
        let accordionMaxHeight = accordionContent.style.maxHeight;

        // Condition handling
        if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
        accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
        header.querySelector(".fas").classList.remove("fa-plus");
        header.querySelector(".fas").classList.add("fa-minus");
        header.parentElement.classList.add("bg-indigo-50");
        } else {
        accordionContent.style.maxHeight = `0px`;
        header.querySelector(".fas").classList.add("fa-plus");
        header.querySelector(".fas").classList.remove("fa-minus");
        header.parentElement.classList.remove("bg-indigo-50");
        }
    });
    });
</script>


<div class="api_formgroup">
<div class="cus_radiodiv">
<span class="cuslabel">Verbatim</span>
<div class="cus_radio">
<input type="radio" name="verbatim" id="yes" checked>
<label for="yes">Yes</label>
<input type="radio" name="verbatim" id="no">
<label for="no">No</label>
</div>
</div>
</div>


<ul class="grid grid-cols-3 gap-x-5 m-10 max-w-md mx-auto">
  <li class="relative">
    <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
    <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_yes">Yes</label>

    <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
      👍
    </div>

  <li class="relative">
    <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
    <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_no">No</label>

    <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
      👎
    </div>
   </li>

  <li class="relative">
    <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
    <label class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-yellow-500 peer-checked:ring-2 peer-checked:border-transparent" for="answer_maybe">Maybe</label>

    <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
      🤔
    </div>
  </li>
</ul>