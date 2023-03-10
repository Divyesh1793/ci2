<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
	<!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
	<style>
		code[class*=language-],
		pre[class*=language-] {
			color: #ccc;
			background: 0 0;
			font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
			font-size: 1em;
			text-align: left;
			white-space: pre;
			word-spacing: normal;
			word-break: normal;
			word-wrap: normal;
			line-height: 1.5;
			-moz-tab-size: 4;
			-o-tab-size: 4;
			tab-size: 4;
			-webkit-hyphens: none;
			-moz-hyphens: none;
			-ms-hyphens: none;
			hyphens: none
		}

		pre[class*=language-] {
			padding: 1em;
			margin: .5em 0;
			overflow: auto
		}

		:not(pre)>code[class*=language-],
		pre[class*=language-] {
			background: #2d2d2d
		}

		:not(pre)>code[class*=language-] {
			padding: .1em;
			border-radius: .3em;
			white-space: normal
		}

		.token.block-comment,
		.token.cdata,
		.token.comment,
		.token.doctype,
		.token.prolog {
			color: #999
		}

		.token.punctuation {
			color: #ccc
		}

		.token.attr-name,
		.token.deleted,
		.token.namespace,
		.token.tag {
			color: #e2777a
		}

		.token.function-name {
			color: #6196cc
		}

		.token.boolean,
		.token.function,
		.token.number {
			color: #f08d49
		}

		.token.class-name,
		.token.constant,
		.token.property,
		.token.symbol {
			color: #f8c555
		}

		.token.atrule,
		.token.builtin,
		.token.important,
		.token.keyword,
		.token.selector {
			color: #cc99cd
		}

		.token.attr-value,
		.token.char,
		.token.regex,
		.token.string,
		.token.variable {
			color: #7ec699
		}

		.token.entity,
		.token.operator,
		.token.url {
			color: #67cdcc
		}

		.token.bold,
		.token.important {
			font-weight: 700
		}

		.token.italic {
			font-style: italic
		}

		.token.entity {
			cursor: help
		}

		.token.inserted {
			color: green
		}
	</style>
	</style>
	<title>Page3</title>
	<script>
		tailwind.config = {
			theme: {
				screens: {
					'xs': '320px',
					'sm': '640px',
					'md': '768px',
					'lg': '1024px',
					'xl': '1280px',
					'2xl': '1536px',
				},
				extend: {
					colors: {
						clifford: '#da373d',
					},
					spacing: {
						'192vh': '192vh',
						'222vh': '222vh',
						'92vh': '92vh',
						'94vh': '94vh',
						'135vh': '135vh',
						'71vh': 'vh',
						'144': '36rem',
					},
				}
			}
		}
	</script>

	<script>
		const answer = document.getElementById("copyResult");
		const copy = document.getElementById("copyButton");
		const selection = window.getSelection();
		const range = document.createRange();
		const textToCopy = document.getElementById("textToCopy")

		copy.addEventListener('click', function(e) {
			range.selectNodeContents(textToCopy);
			selection.removeAllRanges();
			selection.addRange(range);
			const successful = document.execCommand('copy');
			if (successful) {
				answer.innerHTML = 'Copied!';
			} else {
				answer.innerHTML = 'Unable to copy!';
			}
			window.getSelection().removeAllRanges()
		});
	</script>

</head>


<body class=" 2xl:px-20 lg:px-10">

	<nav class="p-5 bg-white md:flex md:items-center md:justify-between">
		<div class="flex justify-between items-center ">
			<span class="text-2xl  cursor-pointer">
				<img src="http://localhost/ci/assets/logo2.png" class="h-12 items-center" />
			</span>

			<span class="text-3xl cursor-pointer mx-2 md:hidden block">
				<ion-icon name="menu" onclick="Menu(this)"></ion-icon>
			</span>
		</div>

		<ul class="md:flex md:items-center md:bg-white md:text-black md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 xs:bg-black xs:text-white">
			<li class="mx-4 my-6 md:my-0">
				<a href="#" class=" duration-500">Product</a>
			</li>
			<li class="mx-4 my-6 md:my-0">
				<a href="http://localhost/ci/index.php/facebook/page1" class=" duration-500">Try Demo</a>
			</li>
			<li class="mx-4 my-6 md:my-0">
				<a href="http://localhost/ci/index.php/facebook/page2" class=" duration-500">Pricing</a>
			</li>
			<li class="mx-4 my-6 md:my-0">
				<a href="http://localhost/ci/index.php/facebook/page3" class="  duration-500">API Doc</a>
			</li>
			<li class="mx-4 my-6 md:my-0">
				<a href="#" class=" duration-500">Login</a>
			</li>

			<button style="background: #8460E5;" class="bg-purple-500 font-bold  rounded-full text-white  duration-500 px-6 py-2 mx-4">
				Join Now
			</button>
		</ul>
	</nav>


	<script>
		function Menu(e) {
			let list = document.querySelector('ul');
			e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
		}
	</script>


	<div class="flex flex-col pb-10">
		<div>
			<p class="text-center font-bold p-11 text-4xl ">
				SERP Types
			</p>
			<div class="xs:px-10">
				<p class="text-center">
					SERPHouse provides the most comprehensive Google ,Bing and Yahoo parsing available<br> allowing you to extract
					structured JSON from Google,<br>
					Bing and Yahoo with the below search types. </p>
			</div>
		</div>
	</div>



	<div class="grid lg:grid-cols-3 items-center	pt-10">

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%);  background: #FFFFFF; " class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/6.1.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> Web Search API </span>
				<p class="pt-10">Standard web search showing</p>
				<p>organic and sponsored and other</p>
				<p>featured snippet results</p>
			</div>
		</div>

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%);  background: #FFFFFF; " class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/6.4.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> Image Search API</span>
				<p class="pt-10">Get JSON result of image search </p>
				<p>results</p>
				<p class="invisible">featured snippet results</p>
			</div>
		</div>

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div style="box-shadow:0px 0px 20px rgb(69 0 255 / 23%);  background: #FFFFFF; " class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/6.3.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> News Search API</span>
				<p class="pt-10">Extract structured JSON from </p>
				<p>Search engine news</p>
				<p class="invisible">featured snippet results</p>
			</div>
		</div>

	</div>

	<div class="pt-24 text-center md:px-16 lg:px-6  xs:px-10 xl:px-48  ">
		<p class="xs:text-justify xl:text-center">SERPHouse uses propriatory visual page inspection to parse the SE results page without the need for manual rules that break when layouts change. As a result SERPHouse delivers more in-depth and detailed content from the results page, with greater consistency, than any other service.</p><br>
		<p class="xs:text-justify xl:text-center">
			Who can claim that planning an SEO approach is not a painstaking & labor-intensive task? Keyword analysis, technical review, link building, Rank Tracker, increasing visibility of a website, analyzing the search results, all such tasks are simply a tiny fraction of an SEO’s periodic system. With SERPhouse Search API; Digital Marketing Agencies, Webmasters and Developers can utilize the data in order to blend them inside their private applications or business streams.</p>
	</div>


	<style>
		.tab-btn.active {
			background-color: #8460E5;
			color: #FFFFFF;
			fill: #FFFFFF;
		}
	</style>

	<div class="xl:px-3">
		<div class="xl:flex xl:flex-row 2xl:pt-40  xl:space-y-0 xs:p-6 xs:space-y-4 xl:space-x-1">
			<div class="md:justify-between group-1 md:flex md:mx-8 xl:space-x-14  2xl:space-x-24 md:flex-row  lg:justify-between bg-white border-2 shadow-2xl  rounded-3xl ">
				<button class="tab-btn active inline-flex 2xl:mx-0  xs:mx-14 sm:mx-56 md:mx-0  p-2 xs:space-x-5  focus:outline-none   cursor-pointer  font-bold   fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 25.996094 48 C 13.3125 48 2.992188 37.683594 2.992188 25 C 2.992188 12.316406 13.3125 2 25.996094 2 C 31.742188 2 37.242188 4.128906 41.488281 7.996094 L 42.261719 8.703125 L 34.675781 16.289063 L 33.972656 15.6875 C 31.746094 13.78125 28.914063 12.730469 25.996094 12.730469 C 19.230469 12.730469 13.722656 18.234375 13.722656 25 C 13.722656 31.765625 19.230469 37.269531 25.996094 37.269531 C 30.875 37.269531 34.730469 34.777344 36.546875 30.53125 L 24.996094 30.53125 L 24.996094 20.175781 L 47.546875 20.207031 L 47.714844 21 C 48.890625 26.582031 47.949219 34.792969 43.183594 40.667969 C 39.238281 45.53125 33.457031 48 25.996094 48 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Google
					</div>

				</button>
				<button class="tab-btn  inline-flex xl:mx-2 xs:mx-14 sm:mx-56 md:mx-8 p-2 xs:space-x-5 focus:outline-none   cursor-pointer   font-bold  fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 45 26.101563 L 45 21 C 45 20.101563 44.398438 19.300781 43.601563 19.101563 L 39 17.699219 C 33.699219 16.101563 28.699219 14.699219 23.398438 13 C 23.398438 13 23.300781 13 23.300781 13 C 22.5 12.800781 21.699219 13.699219 22.101563 14.5 C 24 18.398438 26 24 26 24 L 32.699219 26.601563 C 32.398438 26.601563 11 38 11 38 L 20 30 L 20 7 C 20 6.101563 19.398438 5.199219 18.601563 5 C 18.601563 5 13.699219 3.101563 10.601563 2.101563 C 10.398438 2 10.199219 2 10 2 C 9.601563 2 9.199219 2.101563 8.800781 2.398438 C 8.300781 2.800781 8 3.398438 8 4 L 8 38.699219 C 8 39.398438 8.300781 40 8.898438 40.300781 C 11 41.800781 13.199219 43.300781 15.300781 44.800781 L 18.300781 46.898438 C 18.601563 47.101563 19 47.300781 19.398438 47.300781 C 19.800781 47.300781 20.101563 47.199219 20.398438 47 C 24.699219 44.398438 29.101563 41.800781 33.398438 39.199219 L 44 32.898438 C 44.601563 32.5 45 31.898438 45 31.199219 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Bing
					</div>
				</button>

				<button class="tab-btn  inline-flex xl:mx-2 md:mr-0 xs:mx-14 sm:mx-56 md:mx-8  p-2  xs:space-x-5 focus:outline-none   cursor-pointer  font-bold   fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 25.996094 48 C 13.3125 48 2.992188 37.683594 2.992188 25 C 2.992188 12.316406 13.3125 2 25.996094 2 C 31.742188 2 37.242188 4.128906 41.488281 7.996094 L 42.261719 8.703125 L 34.675781 16.289063 L 33.972656 15.6875 C 31.746094 13.78125 28.914063 12.730469 25.996094 12.730469 C 19.230469 12.730469 13.722656 18.234375 13.722656 25 C 13.722656 31.765625 19.230469 37.269531 25.996094 37.269531 C 30.875 37.269531 34.730469 34.777344 36.546875 30.53125 L 24.996094 30.53125 L 24.996094 20.175781 L 47.546875 20.207031 L 47.714844 21 C 48.890625 26.582031 47.949219 34.792969 43.183594 40.667969 C 39.238281 45.53125 33.457031 48 25.996094 48 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Yahoo
					</div>
				</button>

			</div>

			<div class="group-2 md:justify-between md:flex md:mx-8 2xl:mx-0 md:flex-row xl:space-x-14 2xl:space-x-24  lg:justify-between bg-white border-2 shadow-2xl  rounded-3xl ">
				<button class=" tab-btn active md:mx-0 inline-flex   xs:mx-14 sm:mx-56   p-2 xs:space-x-5 focus:outline-none  cursor-pointer  font-bold  fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 25.996094 48 C 13.3125 48 2.992188 37.683594 2.992188 25 C 2.992188 12.316406 13.3125 2 25.996094 2 C 31.742188 2 37.242188 4.128906 41.488281 7.996094 L 42.261719 8.703125 L 34.675781 16.289063 L 33.972656 15.6875 C 31.746094 13.78125 28.914063 12.730469 25.996094 12.730469 C 19.230469 12.730469 13.722656 18.234375 13.722656 25 C 13.722656 31.765625 19.230469 37.269531 25.996094 37.269531 C 30.875 37.269531 34.730469 34.777344 36.546875 30.53125 L 24.996094 30.53125 L 24.996094 20.175781 L 47.546875 20.207031 L 47.714844 21 C 48.890625 26.582031 47.949219 34.792969 43.183594 40.667969 C 39.238281 45.53125 33.457031 48 25.996094 48 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Google
					</div>

				</button>
				<button class="tab-btn  inline-flex xl:mx-2 xs:mx-14 sm:mx-56 md:mx-8  p-2 xs:space-x-5    focus:outline-none cursor-pointer   font-bold   fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 45 26.101563 L 45 21 C 45 20.101563 44.398438 19.300781 43.601563 19.101563 L 39 17.699219 C 33.699219 16.101563 28.699219 14.699219 23.398438 13 C 23.398438 13 23.300781 13 23.300781 13 C 22.5 12.800781 21.699219 13.699219 22.101563 14.5 C 24 18.398438 26 24 26 24 L 32.699219 26.601563 C 32.398438 26.601563 11 38 11 38 L 20 30 L 20 7 C 20 6.101563 19.398438 5.199219 18.601563 5 C 18.601563 5 13.699219 3.101563 10.601563 2.101563 C 10.398438 2 10.199219 2 10 2 C 9.601563 2 9.199219 2.101563 8.800781 2.398438 C 8.300781 2.800781 8 3.398438 8 4 L 8 38.699219 C 8 39.398438 8.300781 40 8.898438 40.300781 C 11 41.800781 13.199219 43.300781 15.300781 44.800781 L 18.300781 46.898438 C 18.601563 47.101563 19 47.300781 19.398438 47.300781 C 19.800781 47.300781 20.101563 47.199219 20.398438 47 C 24.699219 44.398438 29.101563 41.800781 33.398438 39.199219 L 44 32.898438 C 44.601563 32.5 45 31.898438 45 31.199219 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Bing
					</div>
				</button>

				<button class="tab-btn  inline-flex xl:mx-2 md:mr-0 xs:mx-14 sm:mx-56 md:mx-8  p-2 xs:space-x-5  focus:outline-none   cursor-pointer font-bold   fill-purple-600 text-purple-600 rounded-3xl">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
						<path d="M 25.996094 48 C 13.3125 48 2.992188 37.683594 2.992188 25 C 2.992188 12.316406 13.3125 2 25.996094 2 C 31.742188 2 37.242188 4.128906 41.488281 7.996094 L 42.261719 8.703125 L 34.675781 16.289063 L 33.972656 15.6875 C 31.746094 13.78125 28.914063 12.730469 25.996094 12.730469 C 19.230469 12.730469 13.722656 18.234375 13.722656 25 C 13.722656 31.765625 19.230469 37.269531 25.996094 37.269531 C 30.875 37.269531 34.730469 34.777344 36.546875 30.53125 L 24.996094 30.53125 L 24.996094 20.175781 L 47.546875 20.207031 L 47.714844 21 C 48.890625 26.582031 47.949219 34.792969 43.183594 40.667969 C 39.238281 45.53125 33.457031 48 25.996094 48 Z"></path>
					</svg>
					<div class="py-3 2xl:px-3 text-xl">
						Yahoo
					</div>
				</button>


			</div>
		</div>
	</div>

	<script>
		var tabLink = document.querySelectorAll(".group-1 button")

		tabLink.forEach(function(item) {
			item.addEventListener(
				"click",
				function(e) {
					tabLink.forEach(function(item) {
						item.classList.remove("active");
					});
					item.classList.add("active");

					console.log(e.target);
				},
				false
			);
		});
		var groupSecond = document.querySelectorAll(".group-2 button")


		groupSecond.forEach(function(item) {
			item.addEventListener(
				"click",
				function(e) {
					groupSecond.forEach(function(item) {
						item.classList.remove("active");
					});
					item.classList.add("active");

					console.log(e.target);
				},
				false
			);
		});
	</script>


	<div class="md:px-12 xl:pr-20 2xl:pr-8 2xl:pl-14">
		<div class="grid relative grid-cols-2 border-4 rounded-3xl ">
			<iframe src="https://wp.serphouse.com/data/hosting.html" scrolling="" class="w-full overflow-auto xl:h-[107vh] lg:h-[135vh] xs:h-[94vh] xs:pb-4" title="Iframe Example"></iframe>

			<div class="overflow-auto w-full 2xl:rounded-r-3xl rounded-r-3xl lg:h-[135vh] xs:h-[94vh]  xl:h-[107vh]">
				<div id="textToCopy">
					<div class="copy-text">
						<div class=" w-auto ">
							<div class="tab-pane fade show  active" id="curl" role="tabpanel" aria-labelledby="curl-tab">
								<pre class="language-bash relative" id="curlsourcecode">
				<button class="absolute top-3 right-3" style="top:20px;right:20px" id="copyButton"><i class="fa fa-clone"></i></button><span id="copyResult"></span>
     				<code class="language-css">
			{
  "search_metadata": {
    "id": null,
    "status": "success",
    "created_at": null,
    "processed_at": "2023-01-04 09:56:31"
  },
  "search_parameters": {
    "domain": "google.com",
    "lang": "en",
    "country": "US",
    "location": "Abernathy,Texas,United States",
    "q": "Hosting",
    "device": "desktop",
    "url": "https://www.google.com/search?q=Hosting&uule=w+CAIQICIdQWJlcm5hdGh5LFRleGFzLFVuaXRlZCBTdGF0ZXM=&hl=en&gl=US&num=100&ie=UTF-8&tbs=li:1",
    "page": "1",
    "num": 100,
    "ie": "UTF-8",
    "tbs": "li:1"
  },
  "results": {
    "search_information": [
      {
        "total_results": "697,000,000",
        "time_taken_displayed": "0.57"
      }
    ],
    "ads": [
      {
        "position": 1,
        "block_position": "top",
        "title": "Sign Up Today - Get 4 Months Free - Powerful WP Hosting",
        "link": "https://getflywheel.com/",
        "displayed_link": "https://www.getflywheel.com/4-months/free",
        "description": "Sign Up Today - Get 4 Months Free - Powerful WP Hosting "
      },
      {
        "position": 2,
        "block_position": "top",
        "title": "GoDaddy Website Hosting - Includes Free Domain and SSL",
        "link": "https://www.godaddy.com/offers/pro/web-hosting",
        "displayed_link": "https://www.godaddy.com/",
        "description": "GoDaddy Website Hosting - Includes Free Domain and SSL "
      },
      {
        "position": 3,
        "block_position": "top",
        "title": "Online Web Hosting - WordPress.com (Official Site)",
        "link": "https://wordpress.com/hosting/",
        "displayed_link": "https://www.wordpress.com/",
        "description": "Online Web Hosting - WordPress.com (Official Site) "
      },
      {
        "position": 4,
        "block_position": "bottom",
        "title": "Web Hosting on IBM® Cloud - IBM® Web Hosting Services",
        "link": "https://www.ibm.com/cloud/hosting/web-hosting",
        "displayed_link": "https://www.ibm.com/web/hosting",
        "description": "Web Hosting on IBM® Cloud - IBM® Web Hosting Services "
      }
    ],
    "inline_videos": [
      {
        "title": "What Is Web Hosting? Explained YouTube ·  Pickaweb.co.uk  4 minutes, 36 secondsJun 29, 2017 ",
        "source": "YouTube",
        "channel": " ·  Pickaweb.co.uk",
        "url": "#fpstate=ive&vld=cid:f9273cb4,vid:htbY9-yggB0"
      },
      {
        "title": "Techno Tim HomeLab Services Tour (Late 2022) - What am I ... YouTube ·  Techno Tim  38 minutes, 52 seconds3 days ago ",
        "source": "YouTube",
        "channel": " ·  Techno Tim",
        "url": "#fpstate=ive&vld=cid:86a4cd6b,vid:yrMRZVvkxeA"
      },
      {
        "title": "Jetpack VideoPress: The Finest WordPress Video Hosting ... Jetpack ·  Jetpack.com  2 minutes, 29 secondsMar 17, 2016 ",
        "source": "Jetpack",
        "channel": " ·  Jetpack.com",
        "url": "https://jetpack.com/videopress/"
      }
    ],
    "organic": [
      {
        "position": 1,
        "title": "Web Hosting | With 1-Click Installer, 24/7 Support, and More",
        "link": "https://www.hostinger.com/web-hosting",
        "displayed_link": "https://www.hostinger.com › web-hosting ",
        "cached_page": "",
        "snippet": "Hostinger provides easy-to-use, fast, and secure web hosting services. Experience the best website hosting technology and get your site online today."
      },
      {
        "position": 2,
        "title": "Web Hosting That Fit Your Needs - Namecheap",
        "link": "https://www.namecheap.com/hosting/",
        "displayed_link": "https://www.namecheap.com › hosting ",
        "cached_page": "",
        "snippet": "Get cheap web hosting services with Namecheap! Do you run a professional business or a personal WordPress website? Get 24/7 support, FREE Whois ..."
      },
      {
        "position": 3,
        "title": "SiteGround: Web Hosting Services Crafted with Care",
        "link": "https://www.siteground.com/",
        "displayed_link": "https://www.siteground.com",
        "cached_page": "",
        "snippet": "Our web hosting is trusted by more than 2800000 domains for its top speed, unmatched security, 24/7 fast, and expert support! Get started now!",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.siteground.com/web-hosting.htm",
              "title": "Web Hosting"
            },
            {
              "link": "https://www.siteground.com/company",
              "title": "Company"
            },
            {
              "link": "https://www.siteground.com/cloud-hosting.htm",
              "title": "Cloud Hosting"
            },
            {
              "link": "https://www.siteground.com/reseller_hosting.htm",
              "title": "Reseller Hosting"
            }
          ]
        }
      },
      {
        "position": 4,
        "title": "Bluehost.com: Best Web Hosting - Domains - WordPress - 2022",
        "link": "https://www.bluehost.com/",
        "displayed_link": "https://www.bluehost.com",
        "cached_page": "",
        "snippet": "Bluehost is one of the largest website hosting providers and powers millions of websites. Learn more about our secure and reliable hosting services today!",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.bluehost.com/hosting",
              "title": "Hosting"
            },
            {
              "link": "https://www.bluehost.com/domains",
              "title": "Domains"
            },
            {
              "link": "https://www.bluehost.com/wordpress",
              "title": "WordPress"
            },
            {
              "link": "https://www.bluehost.com/solutions/full-service",
              "title": "Professional Services"
            }
          ]
        }
      },
      {
        "position": 5,
        "title": "HostGator: Web Hosting - 2022's Best Website Hosting",
        "link": "https://www.hostgator.com/",
        "displayed_link": "https://www.hostgator.com",
        "cached_page": "",
        "snippet": "Web hosting that scales from easy to expert. A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress installs, and a",
        "sitelinks": {
          "inline": [
            {
              "link": "https://www.hostgator.com/web-hosting",
              "title": "Hosting"
            },
            {
              "link": "https://www.hostgator.com/domains",
              "title": "Domains"
            },
            {
              "link": "https://www.hostgator.com/dedicated-server",
              "title": "PRO Hosting"
            },
            {
              "link": "https://www.hostgator.com/help",
              "title": "Resources"
            }
          ]
        }
      },
      {
        "position": 6,
        "title": "Hosting | Secure, Fast and Reliable Solutions - GoDaddy",
        "link": "https://www.godaddy.com/hosting",
        "displayed_link": "https://www.godaddy.com › hosting ",
        "cached_page": "",
        "snippet": "GoDaddy hosting solutions are built for speed, reliability and security. Select the best domain hosting plan for you from Shared, WordPress, VPS Hosting and ..."
      },
      {
        "position": 7,
        "title": "WordPress Hosting, Perfected. | WP Engine®",
        "link": "https://wpengine.com/",
        "displayed_link": "https://wpengine.com",
        "cached_page": "",
        "snippet": "WP Engine provides the fastest, most reliable WordPress hosting for 1.5M+ websites. Get 24/7 support, best-in-class security, and market-leading ..."
      },
      {
        "position": 8,
        "title": "Web Hosting: Secure, Fast, & Reliable | InMotion Hosting",
        "link": "https://www.inmotionhosting.com/",
        "displayed_link": "https://www.inmotionhosting.com",
        "cached_page": "",
        "snippet": "Premium Web Hosting on Linux Servers with 99.99% Uptime. Domains, Email & WordPress Solutions with 24x7 Customer Support & Money-Back Guarantee."
      },
      {
        "position": 9,
        "title": "Hosting - definition of Hosting by The Free Dictionary",
        "link": "https://www.thefreedictionary.com/Hosting",
        "displayed_link": "https://www.thefreedictionary.com › Hosting ",
        "cached_page": "",
        "snippet": "Define Hosting. Hosting synonyms, Hosting pronunciation, Hosting translation, English dictionary definition of Hosting. n. 1. One who receives or entertains ..."
      },
      {
        "position": 10,
        "title": "Google Cloud web hosting",
        "link": "https://cloud.google.com/solutions/web-hosting",
        "displayed_link": "https://cloud.google.com › solutions › web-hosting ",
        "cached_page": "",
        "snippet": "Web hosting services from Google Cloud. Host everything from blogs to dynamic websites in the cloud with Click to Deploy or customized solutions."
      },
      {
        "position": 11,
        "title": "Hosting - Wikipedia",
        "link": "https://en.wikipedia.org/wiki/Hosting",
        "displayed_link": "https://en.wikipedia.org › wiki › Hosting ",
        "cached_page": "",
        "snippet": "Hosting may refer to: To act as the organizer or master of ceremonies for an event; Self-hosting (compilers), software distribution which provides all ..."
      },
      {
        "position": 12,
        "title": "Wordpress Hosting | Fast and Secure WP Web Hosting",
        "link": "https://www.domain.com/wordpress-hosting",
        "displayed_link": "https://www.domain.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Bring your wordpress website to the next level with fast, secure and reliable hosting. Upgrade your hosting with Domain.com!"
      },
      {
        "position": 13,
        "title": "Fast and secure web hosting - Firebase",
        "link": "https://firebase.google.com/products/hosting",
        "displayed_link": "https://firebase.google.com › products › hosting ",
        "cached_page": "",
        "snippet": "With Firebase Hosting, you can deploy a single-page web app, a mobile app landing page, or a progressive web app without all the hassle. plat_web ..."
      },
      {
        "position": 14,
        "title": "How to Choose the Best WordPress Hosting in 2023 ...",
        "link": "https://www.wpbeginner.com/wordpress-hosting/",
        "displayed_link": "https://www.wpbeginner.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "That's why they're an official WordPress recommended hosting provider. Note: Our wPBeginner website is also hosted on SiteGround Enterprise servers, and we love ..."
      },
      {
        "position": 15,
        "title": "Fully Dedicated & Managed WordPress Hosting Starting at $12",
        "link": "https://wpmudev.com/hosting/",
        "displayed_link": "https://wpmudev.com › hosting ",
        "cached_page": "",
        "snippet": "Everything you need for WordPress! Super-powered Hosting, 24/7 Live Support, Site Management tools, and Premium Plugins. 7-days FREE Trial."
      },
      {
        "position": 16,
        "title": "WordPress Hosting",
        "link": "https://wordpress.org/hosting/",
        "displayed_link": "https://wordpress.org › hosting ",
        "cached_page": "",
        "snippet": "Get web hosting for your WordPress website from providers that have modern and approved server configurations."
      },
      {
        "position": 17,
        "title": "Best Web Hosting For Small Business In 2023 – Forbes Advisor",
        "link": "https://www.forbes.com/advisor/business/software/best-web-hosting-services/",
        "displayed_link": "https://www.forbes.com › advisor › business › software ",
        "cached_page": "",
        "snippet": "Discover the best web hosting services available today. Our team carefully reviewed dozens of options, comparing pricing, reliability and more."
      },
      {
        "position": 18,
        "title": "Hosting & Deployment - Hugo",
        "link": "https://gohugo.io/hosting-and-deployment/",
        "displayed_link": "https://gohugo.io › hosting-and-deployment ",
        "cached_page": "",
        "snippet": "Hosting & Deployment. Because Hugo renders static websites, you can host your new Hugo website virtually anywhere. The following represent only a few of the ..."
      },
      {
        "position": 19,
        "title": "DigitalOcean | The Cloud for Builders",
        "link": "https://www.digitalocean.com/",
        "displayed_link": "https://www.digitalocean.com",
        "cached_page": "",
        "snippet": "Build eCommerce stores and websites seamlessly with Cloudways. Leave the hassles of running a website to the experts. Sign up for managed hosting through ..."
      },
      {
        "position": 20,
        "title": "Google Code Archive",
        "link": "https://code.google.com/archive/",
        "displayed_link": "https://code.google.com › archive ",
        "cached_page": "",
        "snippet": "You can learn more about the data served from Google Cloud Storage here. Google Code offered open-source project hosting on other domains besides just code."
      },
      {
        "position": 21,
        "title": "WordPress Hosting on a Managed Cloud Platform - Cloudways",
        "link": "https://www.cloudways.com/en/wordpress-hosting.php",
        "displayed_link": "https://www.cloudways.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "WordPress Hosting on managed cloud servers for instant speed boosts. Start the 3-day free trial to enjoy 24/7 support, free SSL, migration, backups & more."
      },
      {
        "position": 22,
        "title": "Wix.com: Free Website Builder | Create a Free Website",
        "link": "https://www.wix.com/",
        "displayed_link": "https://www.wix.com",
        "cached_page": "",
        "snippet": "Get scalable, free web hosting when you create your own website, and connect a professional domain name. Create a Site. Logo maker tool creating a customized ..."
      },
      {
        "position": 23,
        "title": "AWS Amplify Hosting | Fast & Secure Web App Hosting",
        "link": "https://aws.amazon.com/amplify/hosting/",
        "displayed_link": "https://aws.amazon.com › amplify › hosting ",
        "cached_page": "",
        "snippet": "AWS Amplify Hosting provides the easiest way to deploy and host fast, secure, and reliable web apps that scale with your business. Built on AWS."
      },
      {
        "position": 24,
        "title": "Shared Hosting - Reclaim Hosting",
        "link": "https://www.reclaimhosting.com/shared-hosting/",
        "displayed_link": "https://www.reclaimhosting.com › shared-hosting ",
        "cached_page": "",
        "snippet": "Reasonably priced student and faculty hosting plans with a host of functionality from free SSL certificates to automated software installation."
      },
      {
        "position": 25,
        "title": "Webflow web hosting: Fast, reliable service",
        "link": "https://webflow.com/hosting",
        "displayed_link": "https://webflow.com › hosting ",
        "cached_page": "",
        "snippet": "Webflow hosting is powered by the fastest and most reliable website hosting technology — without all the hassles of a website management platform."
      },
      {
        "position": 26,
        "title": "WordPress Hosting - Fast, Secure & Managed by Expert 24/7 ...",
        "link": "https://www.greengeeks.com/wordpress-hosting",
        "displayed_link": "https://www.greengeeks.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Jun 19, 2021  —  WordPress Hosting on the GreenGeeks Web Hosting Platform that's faster, more secure and backed by expert 24/7 technical support.",
        "snippet_extension": ["Jun 19, 2021"]
      },
      {
        "position": 27,
        "title": "Web Hosting Talk",
        "link": "https://www.mac-forums.com/link-forums/looking-for-great-information-on-hosting-or-servic.98/",
        "displayed_link": "https://www.mac-forums.com › link-forums › looking-f... ",
        "cached_page": "",
        "snippet": "Welcome to Web Hosting Talk. WHT is the largest, most influential web and cloud hosting community on the Internet. It is your main source for discussions ..."
      },
      {
        "position": 28,
        "title": "Hosting | Office of the Controller - UNLV",
        "link": "https://www.unlv.edu/controller/accountspayable/hosting",
        "displayed_link": "https://www.unlv.edu › controller › accountspayable ",
        "cached_page": "",
        "snippet": "Hosting includes official events of any size sponsored by a department on behalf of employees, students, or guests. Expenditures can include: Meals; Beverages ..."
      },
      {
        "position": 29,
        "title": "Secure Business Email for your organization - Zoho Mail",
        "link": "https://www.zoho.com/mail/",
        "displayed_link": "https://www.zoho.com › mail ",
        "cached_page": "",
        "snippet": "Ad-free Business Email Hosting with a clean, minimalist interface. Integrated Calendar, Contacts, Notes, Tasks apps. Free for up to 5 users."
      },
      {
        "position": 30,
        "title": "What is Web Hosting? - Beginner's Guide - Website.com",
        "link": "https://www.website.com/beginnerguide/webhosting/6/1/what-is-web-hosting?.ws",
        "displayed_link": "https://www.website.com › beginnerguide › what-is-we... ",
        "cached_page": "",
        "snippet": "A web host, or web hosting service provider provides the technologies and services needed for a website to be seen on the Internet."
      },
      {
        "position": 31,
        "title": "Responsible hosting in the United States - Airbnb Help Center",
        "link": "https://www.airbnb.ae/help/article/1376/responsible-hosting-in-the-united-states",
        "displayed_link": "https://www.airbnb.ae › help › article › responsible-host... ",
        "cached_page": "",
        "snippet": "We encourage Hosts to think carefully about their responsibilities. Hosting offers rich experiences, but it comes with a certain level of commitment."
      },
      {
        "position": 32,
        "title": "Upcoming Trainings - Art of Hosting",
        "link": "https://artofhosting.org/trainings-3/event-listing/",
        "displayed_link": "https://artofhosting.org › trainings-3 › event-listing ",
        "cached_page": "",
        "snippet": "Art of Hosting Trainings. Here is a listing of upcoming Art of Hosting trainings worldwide – mostly 3-day events where you are immersed in and learn about ..."
      },
      {
        "position": 33,
        "title": "Free Web Hosting - HubSpot",
        "link": "https://www.hubspot.com/products/cms/web-hosting",
        "displayed_link": "https://www.hubspot.com › products › cms › web-hosting ",
        "cached_page": "",
        "snippet": "Hosting helps to ensure your content is secure and reliable when it reaches your customers. CMS Hub offers premium website hosting – all for free, without extra ..."
      },
      {
        "position": 34,
        "title": "DreamHost - Web Hosting, Domain Names, WordPress & More",
        "link": "https://www.dreamhost.com/",
        "displayed_link": "https://www.dreamhost.com",
        "cached_page": "",
        "snippet": "DreamHost offers domain names, web hosting, managed WordPress hosting, business email, and much more. 100% uptime guarantee, 24/7 support. Sign up today!"
      },
      {
        "position": 35,
        "title": "Hosting - Craft CMS",
        "link": "https://craftcms.com/hosting",
        "displayed_link": "https://craftcms.com › hosting ",
        "cached_page": "",
        "snippet": "Craft-friendly hosting providers and learning resources to help you find the right web host for your project."
      },
      {
        "position": 36,
        "title": "IONOS » Hosting Provider | Websites. Domains. Server.",
        "link": "https://www.ionos.com/",
        "displayed_link": "https://www.ionos.com",
        "cached_page": "",
        "snippet": "IONOS, your digital partner for cloud solutions and web hosting, supporting your needs from websites, domains, servers, and more."
      },
      {
        "position": 37,
        "title": "hosting - Wiktionary",
        "link": "https://en.wiktionary.org/wiki/hosting",
        "displayed_link": "https://en.wiktionary.org › wiki › hosting ",
        "cached_page": "",
        "snippet": "hosting (countable and uncountable, plural hostings). (computing) Running and maintaining a computer system on someone's behalf. (obsolete) A battle."
      },
      {
        "position": 38,
        "title": "Vultr.com: SSD VPS Servers, Cloud Servers and Cloud Hosting",
        "link": "https://www.vultr.com/",
        "displayed_link": "https://www.vultr.com",
        "cached_page": "",
        "snippet": "Vultr Global Cloud Hosting - Brilliantly Fast SSD VPS Cloud Servers. 100% KVM Virtualization."
      },
      {
        "position": 39,
        "title": "Apex Hosting: Minecraft Server Hosting",
        "link": "https://apexminecrafthosting.com/",
        "displayed_link": "https://apexminecrafthosting.com",
        "cached_page": "",
        "snippet": "The best Minecraft server hosting provider with lag free hardware, 24/7 live chat support and video guides. Start your server today for as cheap as $2.99."
      },
      {
        "position": 40,
        "title": "Website Hosting Options | University IT",
        "link": "https://uit.stanford.edu/guide/website/hosting",
        "displayed_link": "https://uit.stanford.edu › guide › website › hosting ",
        "cached_page": "",
        "snippet": "Features, Google Sites, Stanford Domains, Stanford Sites, Drupal Hosting on Acquia, web.stanford.edu (AFS-based websites) ..."
      },
      {
        "position": 41,
        "title": "Hosting Platform of Choice",
        "link": "https://cpanel.net/",
        "displayed_link": "https://cpanel.net",
        "cached_page": "",
        "snippet": "With its world-class support and rich feature set, cPanel & WHM has been the industry-leading web hosting platform for over 20 years."
      },
      {
        "position": 42,
        "title": "What is Hosting? - Definition from Techopedia",
        "link": "https://www.techopedia.com/definition/29023/web-hosting",
        "displayed_link": "https://www.techopedia.com › ... › Internet › Hosting ",
        "cached_page": "",
        "snippet": "Hosting, in its most generic sense, is a service through which storage and computing resources ... Hosting is also known as Web hosting or website hosting."
      },
      {
        "position": 43,
        "title": "Kinsta® Cloud Hosting for All Your Web Projects",
        "link": "https://kinsta.com/",
        "displayed_link": "https://kinsta.com",
        "cached_page": "",
        "snippet": "Join the growing club of companies, developers & entrepreneurs who made the switch to our cloud platform for simpler, faster, more reliable cloud hosting."
      },
      {
        "position": 44,
        "title": "Web Development and Hosting - Technology @ Berkeley",
        "link": "https://technology.berkeley.edu/web",
        "displayed_link": "https://technology.berkeley.edu › web ",
        "cached_page": "",
        "snippet": "Web Development & Hosting icon. Tools and services for publishing and managing online content. A variety of free and for-fee options allow the UC Berkeley ..."
      },
      {
        "position": 45,
        "title": "Web Hosting / U-M Information and Technology Services",
        "link": "https://its.umich.edu/computing/web-mobile/web-hosting",
        "displayed_link": "https://its.umich.edu › computing › web-mobile › web-... ",
        "cached_page": "",
        "snippet": "Web Hosting is an easy-to-use service that provides campus users access to their own web applications without needing to download, install, and maintain ..."
      },
      {
        "position": 46,
        "title": "Render: Cloud Application Hosting for Developers",
        "link": "https://render.com/",
        "displayed_link": "https://render.com",
        "cached_page": "",
        "snippet": "Render is a unified cloud to build and run all your apps and websites with free TLS certificates, global CDN, private networks and auto deploys from Git."
      },
      {
        "position": 47,
        "title": "Linode: Cloud Computing & Linux Servers | Alternative to AWS",
        "link": "https://www.linode.com/",
        "displayed_link": "https://www.linode.com",
        "cached_page": "",
        "snippet": "Simplify your infrastructure with Linode's cloud computing and hosting solutions and develop, deploy, and scale faster and easier."
      },
      {
        "position": 48,
        "title": "Hosting & Databases - NIH CIT",
        "link": "https://www.cit.nih.gov/services/hosting-databases",
        "displayed_link": "https://www.cit.nih.gov › services › hosting-databases ",
        "cached_page": "",
        "snippet": "CIT's computing and storage infrastructure and scalable database solutions meet NIH's hosting requirements and data-management needs."
      },
      {
        "position": 49,
        "title": "Web Hosting Plans - Media Temple",
        "link": "https://mediatemple.net/webhosting",
        "displayed_link": "https://mediatemple.net › webhosting ",
        "cached_page": "",
        "snippet": "Media Temple offers web hosting plans optimized for your needs. From shared hosting to AWS cloud hosting or dedicated servers, contact us today to find your ..."
      },
      {
        "position": 50,
        "title": "Platform.sh: Cloud hosting platform",
        "link": "https://platform.sh/",
        "displayed_link": "https://platform.sh",
        "cached_page": "",
        "snippet": "The end-to-end cloud PaaS for hosting, development, and deployment."
      },
      {
        "position": 51,
        "title": "Hosting Capacity - Con Edison",
        "link": "https://www.coned.com/en/business-partners/hosting-capacity",
        "displayed_link": "https://www.coned.com › business-partners › hosting-ca... ",
        "cached_page": "",
        "snippet": "Hosting Capacity. Whether you're a customer, contractor, or developer, our interactive maps can help you identify potential sites for private generation."
      },
      {
        "position": 52,
        "title": "Dotster.com: Web Hosting, Domain Name Registration",
        "link": "https://www.dotster.com/",
        "displayed_link": "https://www.dotster.com",
        "cached_page": "",
        "snippet": "Small business web hosting offering additional business services such as: domain name registrations, email accounts, web services, and various small ..."
      },
      {
        "position": 53,
        "title": "Tax Software Hosting - Cloud Solution for Lacerte & ProSeries",
        "link": "https://proconnect.intuit.com/desktop-hosting/",
        "displayed_link": "https://proconnect.intuit.com › desktop-hosting ",
        "cached_page": "",
        "snippet": "Introducing Cloud Hosting for Intuit Lacerte and ProSeries powered by Right Networks. Same tax software. Now online. More flexibility."
      },
      {
        "position": 54,
        "title": "About hosting providers - Google Domains Help",
        "link": "https://support.google.com/domains/answer/3288265?hl=en",
        "displayed_link": "https://support.google.com › domains › answer ",
        "cached_page": "",
        "snippet": "Web hosting provider A web hosting provider is a company that enables businesses and individuals to make their websites available through the World Wide Web ..."
      },
      {
        "position": 55,
        "title": "Divi Hosting - Best Hosting For Divi - Elegant Themes",
        "link": "https://www.elegantthemes.com/hosting/",
        "displayed_link": "https://www.elegantthemes.com › hosting ",
        "cached_page": "",
        "snippet": "Divi Hosting. We've partnered with leading companies in the WordPress Hosting industry to bring you the most reliable, Divi-compatible hosting."
      },
      {
        "position": 56,
        "title": "Gandi.net - Gandi.net: Domain Names, Web Hosting, SSL ...",
        "link": "https://www.gandi.net/en",
        "displayed_link": "https://www.gandi.net › ... ",
        "cached_page": "",
        "snippet": "Your VPS servers. Keep control over the hosting of your web projects thanks to our VPS offer. Starting at €5.00 excl. tax/month."
      },
      {
        "position": 57,
        "title": "Cheap Web Hosting - Best Website Hosting Service - NameSilo",
        "link": "https://www.namesilo.com/hosting",
        "displayed_link": "https://www.namesilo.com › hosting ",
        "cached_page": "",
        "snippet": "Free email, website builder, and easy WordPress installation are included with all of our hosting plans. Get NameSilo Hosting Today. Find the Flexible Plans for ..."
      },
      {
        "position": 58,
        "title": "Web Hosting in the Cloud | Networksolutions.com",
        "link": "https://www.networksolutions.com/hosting",
        "displayed_link": "https://www.networksolutions.com › hosting ",
        "cached_page": "",
        "snippet": "Need reliable and secure web hosting with live technical support? We've got you covered. Find the right Network Solutions for your business here."
      },
      {
        "position": 59,
        "title": "Web Hosting Solutions - porkbun.com",
        "link": "https://porkbun.com/products/web_hosting",
        "displayed_link": "https://porkbun.com › products › web_hosting ",
        "cached_page": "",
        "snippet": "Up and running in seconds! A third of the web uses WordPress, from hobby blogs to the biggest news sites online. We've built a dedicated WordPress hosting ..."
      },
      {
        "position": 60,
        "title": "Gcore | Global Hosting, CDN, Edge and Cloud Services",
        "link": "https://gcore.com/",
        "displayed_link": "https://gcore.com",
        "cached_page": "",
        "snippet": "We provide powerful solutions that will help your business grow globally. Try our superior performance for free."
      },
      {
        "position": 61,
        "title": "Managed WordPress Hosting from Pressable",
        "link": "https://pressable.com/",
        "displayed_link": "https://pressable.com",
        "cached_page": "",
        "snippet": "Pressable is where WordPress works best. We provide reliable, secure, and speedy managed WordPress hosting backed by expert support."
      },
      {
        "position": 62,
        "title": "WordPress Hosting and Developer Tools - Pantheon.io",
        "link": "https://pantheon.io/product/wordpress-hosting",
        "displayed_link": "https://pantheon.io › product › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Leverage our hosting and WebOps platform to achieve unrivaled speed, uptime, and scalability on WordPress sites. · Pantheon is a Different Kind of WordPress Host.",
        "reviews": {
          "rated": "668 reviews",
          "rating": "Rating: 8.9/10"
        }
      },
      {
        "position": 63,
        "title": "You Don't Need a Guest Room If You Have These Hosting ...",
        "link": "https://www.nytimes.com/wirecutter/reviews/hosting-guests-no-guest-room/",
        "displayed_link": "https://www.nytimes.com › Home › Bedroom ",
        "cached_page": "",
        "snippet": "You Don't Need a Guest Room If You Have These Hosting Essentials · An air mattress with a built-in pump · A support board to make a sofa bed more ...",
        "snippet_extension": ["Nov 18, 2022"]
      },
      {
        "position": 64,
        "title": "Email hosting and forwarding - Shopify Help Center",
        "link": "https://help.shopify.com/en/manual/domains/email-forwarding-and-hosting",
        "displayed_link": "https://help.shopify.com › ... › Topics › Domains ",
        "cached_page": "",
        "snippet": "Email hosting and forwarding ... Email is an important tool for communicating with customers and sending notifications. You can increase trust in your business by ..."
      },
      {
        "position": 65,
        "title": "Hosting Plans - Liquid Web",
        "link": "https://www.liquidweb.com/products/",
        "displayed_link": "https://www.liquidweb.com › products ",
        "cached_page": "",
        "snippet": "Big or small. Dedicated, VPS, Cloud or Managed WordPress. We've got everything you need to power your potential. Chat with a hosting advisor and learn more."
      },
      {
        "position": 66,
        "title": "ZAP-Hosting.com: Server Hosting with ZAP 2.5 - instant online ...",
        "link": "https://zap-hosting.com/",
        "displayed_link": "https://zap-hosting.com",
        "cached_page": "",
        "snippet": "Rent high quality servers, DDoS protected servers with SSD performance, Gameserver, VPS, Rootserver, Ts3 and more!"
      },
      {
        "position": 67,
        "title": "Hosting Capacity Maps and Useful Links",
        "link": "https://www3.dps.ny.gov/W/PSCWeb.nsf/All/6143542BD0775DEC85257FF10056479C",
        "displayed_link": "https://www3.dps.ny.gov › PSCWeb.nsf › All ",
        "cached_page": "",
        "snippet": "National Grid, Hosting Capacity Map. Con Edison, Hosting Capacity Map. Central Hudson, Hosting Capacity Map. Orange and Rockland, Hosting ...",
        "snippet_extension": ["Feb 7, 2020"]
      },
      {
        "position": 68,
        "title": "Hosting - R Plumber",
        "link": "https://www.rplumber.io/articles/hosting.html",
        "displayed_link": "https://www.rplumber.io › articles › hosting ",
        "cached_page": "",
        "snippet": "Once you have developed your Plumber API, the next step is to find a way to host it. If you haven't dealt with hosting an application on a server before, ..."
      },
      {
        "position": 69,
        "title": "Statement by Press Secretary Jen Psaki on the United States ...",
        "link": "https://www.whitehouse.gov/briefing-room/statements-releases/2022/02/10/statement-by-press-secretary-jen-psaki-on-the-united-states-hosting-apec-in-2023/",
        "displayed_link": "https://www.whitehouse.gov › 2022/02/10 › statement-... ",
        "cached_page": "",
        "snippet": "Statement by Press Secretary Jen Psaki on the United States Hosting APEC in 2023. Home · Briefing Room · Statements and Releases.",
        "snippet_extension": ["Feb 10, 2022"]
      },
      {
        "position": 70,
        "title": "Hosting a static website using Amazon S3",
        "link": "https://links.esri.com/amazon-s3-website-hosting",
        "displayed_link": "https://links.esri.com › amazon-s3-website-hosting ",
        "cached_page": "",
        "snippet": "Host a static website on Amazon S3 by configuring your bucket for website hosting and then uploading your content to the bucket."
      },
      {
        "position": 71,
        "title": "Inside the Bulletproof Hosting Business - Trend Micro",
        "link": "https://www.trendmicro.com/vinfo/us/security/news/cybercrime-and-digital-threats/inside-the-bulletproof-hosting-business-cybercrime-methods-opsec",
        "displayed_link": "https://www.trendmicro.com › vinfo › security › news ",
        "cached_page": "",
        "snippet": "Oct 6, 2020  —  Bulletproof hosting (BPH) services have long been crucial parts of the cybercriminal infrastructure. How do they protect malicious ...",
        "snippet_extension": ["Oct 6, 2020"]
      },
      {
        "position": 72,
        "title": "Managed WordPress Hosting | Webhosting - Media Temple",
        "link": "https://thebloggingbuddha.com/goto/mediatemple-hosting/",
        "displayed_link": "https://thebloggingbuddha.com › goto › mediatemple-h... ",
        "cached_page": "",
        "snippet": "Unlock all the power of WordPress with Media Temple's Managed WordPress hosting. Our WordPress experts are ready and waiting to help you."
      },
      {
        "position": 73,
        "title": "Joomla & WordPress Hosting, Support and Tutorials",
        "link": "https://www.cloudaccess.net/",
        "displayed_link": "https://www.cloudaccess.net",
        "cached_page": "",
        "snippet": "A complete web hosting platform built specifically for Joomla & WordPress. We provide written and video tutorials, training, support and optimized cloud ..."
      },
      {
        "position": 74,
        "title": "FastComet - Managed Cloud Hosting with 24/7 Support",
        "link": "https://www.fastcomet.com/",
        "displayed_link": "https://www.fastcomet.com",
        "cached_page": "",
        "snippet": "FastCloud® - Advanced cloud hosting platform with 24/7 Expert Support & 11 Datacenter Locations. We will handle caching, transfers, security, updates."
      },
      {
        "position": 75,
        "title": "AllWebCo Business Web Hosting & Domains",
        "link": "https://allwebco.com/",
        "displayed_link": "https://allwebco.com",
        "cached_page": "",
        "snippet": "Web Hosting, Domain Hosting, Web Host - AllWebCo, Top Hosting Provider for the best Website Hosting, Web Hosting Services, Business, Ecommerce, Frontpage, ..."
      },
      {
        "position": 76,
        "title": "Cloud Hosting - IBM",
        "link": "https://www.ibm.com/cloud/hosting",
        "displayed_link": "https://www.ibm.com › cloud › hosting ",
        "cached_page": "",
        "snippet": "IBM Cloud hosting provides a network of connected virtual and physical cloud servers to host your applications, solutions and websites."
      },
      {
        "position": 77,
        "title": "Web Hosting | Compare, Buy, Host a Website | OVHcloud",
        "link": "https://www.ovhcloud.com/en/web-hosting/",
        "displayed_link": "https://www.ovhcloud.com › web-hosting ",
        "cached_page": "",
        "snippet": "Publish your blog, business website or online store. Managed hosting; Unlimited monthly traffic; Multisite management. Web_Hosting_Hero | OVHcloud.",
        "reviews": {
          "rated": "476 votes",
          "rating": "Rating: 4.8"
        }
      },
      {
        "position": 78,
        "title": "Buy cheap, fast and reliable hosting plans - One.com",
        "link": "https://www.one.com/en/plans-pricing",
        "displayed_link": "https://www.one.com › plans-pricing ",
        "cached_page": "",
        "snippet": "All-inclusive web hosting packages. All plans include an SSL certificate, Website Builder, Email, Free Google Ads credit and 24/7 support."
      },
      {
        "position": 79,
        "title": "Web hosting - UW–⁠Madison Information Technology",
        "link": "https://it.wisc.edu/services/web-hosting/",
        "displayed_link": "https://it.wisc.edu › services › web-hosting ",
        "cached_page": "",
        "snippet": "Sep 6, 2022  —  Providing a community test and production web hosting environment for UW-Madison and its affiliates.",
        "snippet_extension": ["Sep 6, 2022"]
      },
      {
        "position": 80,
        "title": "Web Hosting – Secure Domain Hosting Services - Name.com",
        "link": "https://www.name.com/purchase/hosting",
        "displayed_link": "https://www.name.com › purchase › hosting ",
        "cached_page": "",
        "snippet": "All hosting packages include. Free SSL. All domain name hosting services include a free SSL certificate. New customers who purchase a yearly hosting plan will ..."
      },
      {
        "position": 81,
        "title": "Atlantic.Net: Customized Hosting Solutions For Your Business",
        "link": "https://www.atlantic.net/",
        "displayed_link": "https://www.atlantic.net",
        "cached_page": "",
        "snippet": "We offer hosting Solutions customized to your business needs - cloud, managed, dedicated, HIPAA compliant, and more. Get a free consultation today!"
      },
      {
        "position": 82,
        "title": "Hosting & Monitoring solution - Oracle Cerner",
        "link": "https://www.cerner.com/solutions/hosting-monitoring",
        "displayed_link": "https://www.cerner.com › solutions › hosting-monitoring ",
        "cached_page": "",
        "snippet": "We offer award-winning hosting capabilities for Cerner Millennium®, Soarian® and software as a service (SaaS), as well as more than 100 non-Cerner solutions."
      },
      {
        "position": 83,
        "title": "Drupal Web Hosting | Drupal.org",
        "link": "https://www.drupal.org/hosting",
        "displayed_link": "https://www.drupal.org › hosting ",
        "cached_page": "",
        "snippet": "Drupal Web Hosting ... Building a single Drupal site or managing hundreds of mission-critical digital properties should be simple. One click to install Drupal and ..."
      },
      {
        "position": 84,
        "title": "Managed WordPress Hosting From SiteGround - ThemeForest",
        "link": "https://themeforest.net/wordpress-hosting",
        "displayed_link": "https://themeforest.net › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Exclusive Envato offer! Up to 75% off fast and reliable managed WordPress hosting services and free theme installation. Recommended for their uptime, ..."
      },
      {
        "position": 85,
        "title": "Elementor Cloud Website: Built-In Hosting for WordPress Sites",
        "link": "https://elementor.com/features/cloud/",
        "displayed_link": "https://elementor.com › features › cloud ",
        "cached_page": "",
        "snippet": "Get everything you need, all in one place: Hosting, WordPress pre-installed, and all the Elementor Pro web-creation tools you need for complete design ..."
      },
      {
        "position": 86,
        "title": "cPanel Web Hosting Service",
        "link": "https://web.illinois.edu/",
        "displayed_link": "https://web.illinois.edu",
        "cached_page": "",
        "snippet": "Creating and hosting your website at web.illinois.edu offers a great deal of flexibility with less complexity than managing an entire web server."
      },
      {
        "position": 87,
        "title": "Search for hosting | EURAXESS - European Union",
        "link": "https://euraxess.ec.europa.eu/jobs/hosting/search",
        "displayed_link": "https://euraxess.ec.europa.eu › jobs › hosting › search ",
        "cached_page": "",
        "snippet": "Search for hosting. Dear user, the EURAXESS portal has been renewed to offer you a better and more secure experience.",
        "snippet_extension": ["Results 1 - 10"]
      },
      {
        "position": 88,
        "title": "The Green Hosting Directory, as used by the apps",
        "link": "https://www.thegreenwebfoundation.org/directory/",
        "displayed_link": "https://www.thegreenwebfoundation.org › directory ",
        "cached_page": "",
        "snippet": "On this page, you will find our Green Hosting Directory. For every country, the list starts with Partners: the hosting companies that provide proof of their ..."
      },
      {
        "position": 89,
        "title": "WordPress hosting plans | Reliable & secure web ... - iPage",
        "link": "https://www.ipage.com/wordpress-hosting",
        "displayed_link": "https://www.ipage.com › wordpress-hosting ",
        "cached_page": "",
        "snippet": "Get 24/7 WordPress support along with a free domain, 1-click WordPress Install and unlimited web space! Check out our best value WordPress hosting plans ..."
      },
      {
        "position": 90,
        "title": "'WTH did I just witness?' Magic Eden turns porno after hosting ...",
        "link": "https://cointelegraph.com/news/wth-did-i-just-witness-magic-eden-turns-porno-after-hosting-service-hacked",
        "displayed_link": "https://cointelegraph.com › news › wth-did-i-just-witnes... ",
        "cached_page": "",
        "snippet": "The NFT marketplace said the issue was caused by its third-party image hosting provider and assured users their NFTs were safe.",
        "snippet_extension": ["5 hours ago"]
      },
      {
        "position": 91,
        "title": "Hosting Capacity Map - Ameren Illinois",
        "link": "https://www.ameren.com/illinois/residential/supply-choice/renewables/hosting-capacity-map",
        "displayed_link": "https://www.ameren.com › supply-choice › renewables ",
        "cached_page": "",
        "snippet": "Hosting Capacity Map. The Ameren Illinois Company (AIC) hosting capacity maps display a high-level visualization of the available hosting capacity for ..."
      },
      {
        "position": 92,
        "title": "Serilog.Extensions.Hosting 5.0.1 - NuGet",
        "link": "https://www.nuget.org/packages/Serilog.Extensions.Hosting",
        "displayed_link": "https://www.nuget.org › packages › Serilog.Extensions.... ",
        "cached_page": "",
        "snippet": "Hosting 5.0.1. The ID prefix of this package has been reserved for one of the owners of this Prefix Reserved .NET Standard 2.0 .NET CLI; Package Manager ..."
      },
      {
        "position": 93,
        "title": "Hosting Capacity Tool - Dominion Energy",
        "link": "https://www.dominionenergy.com/projects-and-facilities/electric-projects/energy-grid-transformation/hosting-capacity-tool",
        "displayed_link": "https://www.dominionenergy.com › electric-projects ",
        "cached_page": "",
        "snippet": "Hosting Capacity Tool. This interactive tool helps optimize solar projects in Virginia and North Carolina by providing guidance to customers about which parts ..."
      },
      {
        "position": 94,
        "title": "WordPress.com: Build a Site, Sell Your Stuff, Start a Blog & More",
        "link": "https://wordpress.com/",
        "displayed_link": "https://wordpress.com",
        "cached_page": "",
        "snippet": "Create a free website or build a blog with ease on WordPress.com. Dozens of free, customizable, mobile-ready designs and themes. Free hosting and support."
      },
      {
        "position": 95,
        "title": "Pagely – Managed WordPress Hosting for Businesses ...",
        "link": "https://pagely.com/",
        "displayed_link": "https://pagely.com",
        "cached_page": "",
        "snippet": "Back in the mid-2000s, we saw a need in the market for a simplified, accessible WordPress platform. So we built our own. Today, we serve discerning clients ..."
      },
      {
        "position": 96,
        "title": "Download .NET 6.0 (Linux, macOS, and Windows) - Microsoft",
        "link": "https://dotnet.microsoft.com/en-us/download/dotnet/6.0",
        "displayed_link": "https://dotnet.microsoft.com › en-us › download › dotnet ",
        "cached_page": "",
        "snippet": "On Windows, we recommend installing the Hosting Bundle, which includes the .NET Runtime and IIS support. IIS runtime support (ASP.NET Core Module v2): 16.0."
      },
      {
        "position": 97,
        "title": "Concrete CMS Hosting Pricing",
        "link": "https://www.concretecms.com/hosting",
        "displayed_link": "https://www.concretecms.com › hosting ",
        "cached_page": "",
        "snippet": "Concrete CMS hosting. If you're building something mission critical, host it with the Core Team. Deploy to production and stage directly from GitLab."
      }
    ],
    "people_also_ask": [
      {
        "question": "Whats hosting means? ",
        "answer": null
      },
      {
        "question": "What is an example of hosting? ",
        "answer": null
      },
      {
        "question": "What is hosting and its types? ",
        "answer": null
      },
      {
        "question": "What are the five types of hosting? ",
        "answer": null
      }
    ],
    "related_search": [
      {
        "title": "hosting website",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hosting+website&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj2AhAB"
      },
      {
        "title": "hostinger",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hostinger&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj1AhAB"
      },
      {
        "title": "hosting and domain",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hosting+and+domain&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQjzAhAB"
      },
      {
        "title": "free hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Free+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj0AhAB"
      },
      {
        "title": "best web hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Best+web+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQjvAhAB"
      },
      {
        "title": "wp hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=WP+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj4AhAB"
      },
      {
        "title": "hostinger login",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=Hostinger+login&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj5AhAB"
      },
      {
        "title": "godaddy hosting",
        "link": "https://www.google.com/search?num=100&hl=en&gl=US&tbs=li:1&q=GoDaddy+hosting&sa=X&ved=2ahUKEwiS5ZOV0638AhUwTaQEHUnyCyAQ1QJ6BQj3AhAB"
      }
    ]
  }
}
				</code>
			
									
						</pre>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	</div>

	<div class="flex flex-col pt-28 bg-red-10">
		<div style="color: #8460E5;" class="text-center text-4xl text-purple-500 font-bold ">Infrastructure</div>
		<span style="color: #8460E5;" class="mx-auto text-2xl font-bold text-purple-500">_______________</span>
	</div>

	<br>
	<br>
	<br>
	<div class="grid lg:grid-cols-3 items-center	pt-10">

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/9.1.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> Vast Proxy Network </span>
				<p class="pt-10 px-10">SERPHouse internally routes requests through a vast network of over 45 million residential proxies for extreme performance and reliability.</p>

			</div>
		</div>

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/9.2.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> AI Page Parsing</span>
				<p class="pt-10 px-10">AI-powered page parsing, full-browser rendering and javascript execution mean the results SERPHouse returns are exactly that that a human user.</p>

			</div>
		</div>

		<div class="sm:px-16 lg:px-6 xs:pb-4 xs:px-8">
			<div class="text-center border-4 py-20 rounded-3xl">
				<img src="http://localhost/ci/assets/9.3.png" class=" mx-auto md:px-1 md:h-16 sm:px-64 xs:pb-4 xs:px-24">
				<span class="text-2xl font-bold "> Captcha Solving</span>
				<p class="pt-10 px-10">SERPHouse internally resolves CAPTCHA challenges via machine learning & crowdsourcing - no maintenance overhead needed.</p>

			</div>
		</div>

	</div>

	<div class="pt-20 xs:px-10 ">
		<hr style="border: 2px solid #D1D1D1;" class="">
	</div>


	<div class="grid md:grid-cols-2  bg-white">

		<div class="items-center">
			<img src="http://localhost/ci/assets/4.7.png">
		</div>

		<div class="xl:py-40 md:pl-0 md:pt-20 2xl:space-y-8 xs:px-4  xl:pt-28 sm:px-20">

			<span class="font-bold sm:text-3xl xs:text-2xl  ">Get in touch with us!
			</span>

			<div>
				<span class="text-black  text-2xl">______</span>
			</div>

			<span class="">You may contact us from here for any concern.
			</span>


			<div class="grid md:grid-rows-3 w-3/4 md:grid-flow-col gap-4 pt-10">
				<div class=" bg-white col-span-2 ">
					<div class="bg-white">
						<input class="outline-none border-none  rounded-md xs:p-4 sm:p-4 md:w-28 hover:border-none" placeholder="Your Name">
					</div>
				</div>
				<div class=" bg-white row-span-2 col-span-2 ">
					<div class="bg-white">
						<input class=" outline-none border-none rounded-md xs:p-4 sm:p-4 md:w-28" placeholder="Your Email">
					</div>
				</div>
				<div class=" bg-white row-span-3 xs:pb-3 sm:pb-3 ">
					<div class="bg-white">
						<input class=" outline-none border-none rounded-md  xs:p-4 h-32 sm:p-4 md:w-36" placeholder="Your Message">
					</div>
				</div>
			</div>

			<button style="background: #8460E5;" class="bg-purple-600 text-white font-bold text-sm xl:w-1/2 items-center xs:w-full px-3 py-2 rounded-2xl ">Send Now</button>
		</div>
	</div>





	<div class="grid 2xl:grid-cols-5 xl:grid-cols-4 sm:pt-16 lg:grid-cols-4 xs:pt-16 sm:grid-cols-2 md:grid-cols-3  xl:pt-10 md:pt-12 px-10">

		<div class="bg-white  ">
			<div class="p-6">
				<div class="">
					<img src="http://localhost/ci/assets/5.0.png" class="pb-4 xs:w-1/4">
					<span class="text-sm">
						High Volume API for SEO companies, data mining services, and SEO Tool Suite as a SaaS..</span>
					<br><span class="font-normal p-20 text-sm"><br>
						Follow us</span><br>
					<div class="inline-flex xl:w-6 xl:space-x-1 xs:space-x-2 md:space-x-2 xs:w-5 float-left sm:w-6 ">
						<img src="http://localhost/ci/assets/4.9.png">
						<img src="http://localhost/ci/assets/4.8.png">
					</div>
				</div>
			</div>
		</div>



		<div class="xl:bg-white sm:hidden md:block lg:hidden"></div>
		<div class="xl:bg-white sm:hidden md:block lg:hidden 2xl:block"></div>

		<div class="bg-white p-10">
			<div class="flex flex-col space-y-5 text-center">

				<div style="color: #8460E5;" class="font-bold text-xl text-purple-600">Search API</div>
				<div class="text-sm">Google API</div>
				<div class="text-sm">Bing API</div>
				<div class="text-sm">Yahoo API</div>

			</div>
		</div>


		<div class="bg-white p-10">
			<div class="flex flex-col space-y-5 text-center">

				<div style="color: #8460E5;" class="font-bold text-purple-600 text-xl">Features</div>
				<div class="text-sm">SERP Type</div>
				<div class="text-sm">Mobile & Desktop</div>
				<div class="text-sm">Locations</div>
				<div class="text-sm">SERP Parsing</div>

			</div>
		</div>

		<div class="bg-white-300">
			<div class="bg-white">
				<div class="bg-white p-10">
					<div class="flex flex-col space-y-5 text-center">

						<div style="color: #8460E5;" class="font-bold text-purple-600 text-xl">Help & Support</div>
						<div class="text-sm">Contact Us</div>
						<div class="text-sm">Blog</div>
						<div class="text-sm">FAQs</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="lg:flex sm:text-center pt-16 flex-row px-10 justify-between">
		<div class="pl-6 xs:text-sm  xs:pb-4">Copyright ©2021 SERPHouse.</div>
		<div class="flex xs:space-x-5 xl:pr-6 xs:text-sm 2xl:pr-16 md:space-x-6 sm:place-content-evenly flex-row-reverse;">
			<div class="text-sm">Terms & Conditions</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Privacy Policy</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Licenses</div>
		</div>
	</div>


</body>

</html>
