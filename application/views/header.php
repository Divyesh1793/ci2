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
        <a href="#" class=" duration-500">Try Demo</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" duration-500">Pricing</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="  duration-500">API Doc</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" duration-500">Login</a>
      </li>

      <button class="bg-purple-500 rounded-full text-white  duration-500 px-6 py-2 mx-4">
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
