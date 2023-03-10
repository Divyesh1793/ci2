<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
	<!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->

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
</head>

<body class="2xl:bg-white sm:bg-white md:bg-white lg:bg-white xl:bg-white  xs:bg-white 2xl:px-20 lg:px-10">

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


	<div class="flex flex-col">
		<div>
			<p class="text-center 2xl:text-4xl font-bold p-11 sm:text-2xl xs:text-xl">
				Signup to start using the API today!
			</p>
			<div class="xs:px-10">
				<p class="text-center">
					You’ll be up and running in less then 2 minutes.
				</p>
				<p class="text-center">
					No credit card required • Cancel at any time
				</p>
			</div>
			<style>
				.tab-btn.active {
					background-color: #8460E5;
					color: #FFFFFF;
				}
			</style>

			<div>
				<div class="sm:flex flex-row  xs:px-3 justify-center sm:space-x-8">
					<div class="text-center pt-10">
						<div style="background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #FFFFFF;
							box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
							border-radius: 9px;" class="group-1 sm:inline-flex  shadow-xl rounded-md">
							<button style="border-radius: 9px;" class="tab-btn active  text-gray-800 font-bold py-2 px-10 rounded-l">
								Monthly
							</button>
							<button style="border-radius: 9px;" class="tab-btn   text-gray-800 font-bold py-2 px-10 rounded-r">
								Annual
							</button>
						</div>
					</div>
					<div class="text-center pt-10">
						<div style="background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #FFFFFF;
								box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
								border-radius: 9px;" class="group-2 sm:inline-flex  shadow-xl rounded-md ">
							<button style="border-radius: 9px;" class="tab-btn active     text-gray-800 font-bold py-2 px-10 rounded-l">
								$USD <span class="invisible">sa</span>
							</button>
							<button style="border-radius: 9px;" class=" tab-btn  text-gray-800 font-bold py-2 px-10 rounded-r">
								Annual
							</button>
						</div>
					</div>
				</div>
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


	<div class="md:grid-cols-2 pb-16 2xl:pt-10 lg:grid-cols-4 md:grid">

		<div style="background: #FFFFFF;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
border-radius: 26px;" class="bg-white shadow-black shadow-md p-6 rounded-3xl text-center md:mx-5 xs:mx-5 xs:mt-5 md:mt-5 lg:ml-5 lg:mt-5">
			<div class="pb-10 sm:px-56  md:px-20 lg:px-10 2xl:px-20 px-24">
				<p style="background: #E9ECEF;
border-radius: 11.5px;" class="">Free Trial</p>
			</div>
			<p class="text-4xl font-bold pb-16">$0.00</p>
			<span class="space-y-3">
				<p>200 Delayed SERP</p>
				<p>20000 Delayed SE sm:px-56 RP</p>
				<p>Data from Google, Bing and Yahoo</p>
				<p>HTTPS Encryption</p>
				<p class="invisible">99.9% Uptime SLA</p>
				<p class="invisible">100% Success Rate</p>
				<p class="invisible">Dedicated Support</p>

			</span>
			<div class="pt-12">
				<button style="background: linear-gradient(271.75deg, #1E223A 2.9%, #363D68 103.52%);" class="rounded-md p-3  text-white btn1 font-bold btn1 w-full">Sign Up For Free</button>
			</div>
		</div>

		<style>
			.btn1:hover {
				background: #8460E5 !important;
			}
		</style>





		<div style="background: #FFFFFF;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
			border-radius: 26px;" class="bg-white  shadow-black shadow-md p-6 rounded-3xl text-center md:mx-5 xs:mx-5 xs:mt-5 md:mt-5 lg:ml-5 lg:mt-5">
			<div class="pb-10  sm:px-56  md:px-20 lg:px-10 2xl:px-20 px-24">

				<p style="background: #E9ECEF;
border-radius: 11.5px;" class="">Basic</p>
			</div>
			<p class="text-4xl font-bold pb-16">$29.99</p>
			<span class="space-y-3">
				<p>200 Delayed SERP</p>
				<p>20000 Delayed SERP</p>
				<p>Data from Google, Bing and Yahoo</p>
				<p>HTTPS Encryption</p>
				<p>99.9% Uptime SLA</p>
				<p>100% Success Rate</p>
				<p>Dedicated Support</p>

			</span>
			<div class="pt-12">
				<button style="background: linear-gradient(271.75deg, #1E223A 2.9%, #363D68 103.52%);" class="rounded-md p-3 text-white font-bold btn1	hover:bg-purple-500 w-full">Subscribe</button>
			</div>
		</div>


		<div style="background: #FFFFFF;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
border-radius: 26px;" class="bg-white  shadow-black shadow-md p-6 rounded-3xl text-center md:mx-5 xs:mx-5 xs:mt-5 md:mt-5 lg:ml-5 lg:mt-5">
			<div class="pb-10 sm:px-56  md:px-20 lg:px-10 2xl:px-20  px-24">

				<p style="background: #E9ECEF;
border-radius: 11.5px;" class="">Free Trial</p>
			</div>
			<p class="text-4xl font-bold pb-16">$49.99</p>
			<span class="space-y-3">
				<p>200 Delayed SERP</p>
				<p>20000 Delayed SERP</p>
				<p>Data from Google, Bing and Yahoo</p>
				<p>HTTPS Encryption</p>
				<p>99.9% Uptime SLA</p>
				<p>100% Success Rate</p>
				<p>Dedicated Support</p>
			</span>
			<div class="pt-12">
				<button style="background: linear-gradient(271.75deg, #1E223A 2.9%, #363D68 103.52%);" class="rounded-md p-3 bg-gray-600 text-white font-bold btn1	hover:bg-purple-500 w-full">Subscribe</button>
			</div>
		</div>

		<div style="background: #FFFFFF;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
border-radius: 26px;" class="bg-white  shadow-black shadow-md p-6 rounded-3xl text-center md:mx-5 xs:mx-5 xs:mt-5 md:mt-5 lg:ml-5 lg:mt-5">
			<div class="pb-10 sm:px-56  md:px-20 lg:px-10 2xl:px-20  px-24">

				<p style="background: #E9ECEF;
border-radius: 11.5px;" class="">Free Trial</p>
			</div>
			<p class="text-4xl font-bold pb-16">$$$</p>
			<span class="space-y-3">
				<p>200 Delayed SERP</p>
				<p>20000 Delayed SERP</p>
				<p>Data from Google, Bing and Yahoo</p>
				<p>HTTPS Encryption</p>
				<p>99.9% Uptime SLA</p>
				<p>100% Success Rate</p>
				<p>Dedicated Support</p>
			</span>
			<div class="pt-12">
				<button style="background: linear-gradient(271.75deg, #1E223A 2.9%, #363D68 103.52%);" class="rounded-md p-3 bg-gray-600 text-white font-bold btn1 	hover:bg-purple-500 w-full">Subscribe</button>
			</div>
		</div>
	</div>


	<div class="flex flex-col text-center pb-10">
		<div style="color: #8460E5;" class="font-bold text-3xl text-purple-500">SERP API</div><span style="color: #8460E5;" class="font-bold  text-purple-500">_________________</span>
		<p>The industry-leading SEO data API</p>
	</div>


	<div class="grid md:grid-cols-2">

		<div class="p-12">
			<div class="lg:flex md:items-center md:flex xs:text-center sm:space-x-8">

				<img src="http://localhost/ci/assets/7.1.png" class=" 2xl:h-24 xs:h-20  md:px-1 md:h-24 sm:px-56  sm:h-28 xs:pb-4 xs:px-20">
				<div class="flex flex-col md:text-start ">
					<div class="font-bold">Any worldwide location</div>
					<div>serphouse enables you to obtain accurate and
						geolocated search engine results</div>
				</div>

			</div>
		</div>

		<div class="p-12">
			<div class="lg:flex md:items-center md:flex xs:text-center sm:space-x-8">

				<img src="http://localhost/ci/assets/7.2.png" class="  2xl:h-24 xs:h-20 md:px-1 md:h-24 sm:h-28  sm:px-56 xs:pb-4 xs:px-20">
				<div class="flex flex-col md:text-start  ">
					<div class="font-bold">Ad Results</div>
					<div>Retrive ad result in JSON response of request
						(Supported on Google Only)</div>
				</div>

			</div>
		</div>

		<div class="p-12">
			<div class=" lg:flex md:items-center md:flex xs:text-center sm:space-x-8">

				<img src="http://localhost/ci/assets/7.3.png" class="  2xl:h-24 xs:h-20  md:px-1 md:h-24 sm:h-28  sm:px-56 xs:pb-4 xs:px-20">
				<div class="flex flex-col md:text-start ">
					<div class="font-bold">Highly Scalable</div>
					<div>serphouse always provides you with enough
						performance, no matter how high your volume
						might be.</div>
				</div>

			</div>
		</div>

		<div class="p-12">
			<div class=" lg:flex md:items-center md:flex xs:text-center sm:space-x-8">

				<img src="http://localhost/ci/assets/7.4.png" class=" 2xl:h-24 xs:h-20  md:px-1  sm:h-28 md:h-24 sm:px-56 xs:pb-4 xs:px-20">
				<div class="flex flex-col md:text-start ">
					<div class="font-bold">Accurate Results</div>
					<div>Get parsed or raw SERPs based on coordinates of
						any city or country, any language with a high ad
						rate.</div>
				</div>
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

			<div>
				<p class="font-bold sm:text-3xl xs:text-2xl  ">Get in touch with us!
				</p>
				<span class="text-black  text-2xl">______</span>
			</div>

			<span class="">You may contact us from here for any concern.</span>

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

			<button style="background: #8460E5;" class="bg-purple-600 text-white font-bold text-sm xl:w-1/2 items-center xs:w-full px-3 py-2 2xl:p-4 2xl:w-1/3 rounded-2xl ">Send Now</button>
		</div>
	</div>





	<div class="grid 2xl:grid-cols-5 xl:grid-cols-4 sm:pt-16 lg:grid-cols-4 xs:pt-16 sm:grid-cols-2 md:grid-cols-3  xl:pt-10 md:pt-12 px-10">

		<div class="bg-white  ">
			<div class="p-6">
				<div class="">
					<img src="http://localhost/ci/assets/5.0.png" class="pb-4 xs:w-1/4">
					<span class="text-sm">
						High Volume API for SEO companies, data mining services, and SEO Tool Suite as a SaaS..</span>
					<br><span class="font-normal text-sm p-20"><br>
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
		<div class="flex xs:space-x-5 xl:pr-6 xs:text-sm 2xl:pr-16  md:space-x-6 sm:place-content-evenly flex-row-reverse;">
			<div class="text-sm">Terms & Conditions</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Privacy Policy</div>
			<div class="text-sm">|</div>
			<div class="text-sm">Licenses</div>
		</div>
	</div>


	<br>

</body>

</html>
