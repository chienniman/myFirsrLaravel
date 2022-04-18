@extends('layout.templateIndex')
    @section('shoppingTitle')
        模板化的購物車1
    @endsection
    @section('shoppingCart')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/shoppingCart.css" />
    @endsection
  <body>
      @section('shoppingMain')
      <section id="shopping">
        <div class="container-lg rounded">
          <h1 class="fw-bold">購物車</h1>
          <div class="shopping_progress border-bottom border-1 mb-4 pb-4">
            <div class="row">
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle bg-success d-flex justify-content-center align-items-center text-white mb-3"
                >
                  1
                </div>
                <div>
                  <span>確認購物車</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  2
                </div>
                <div>
                  <span>付款與運送方式</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  3
                </div>
                <div>
                  <span>填寫資料</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  4
                </div>
                <div>
                  <span>完成訂購</span>
                </div>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-success"
                  role="progressbar"
                  style="width: 18%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
          <div class="orderList">
            <span class="fs-3">訂單明細</span>
            <div class="order mt-3 pt-3 pb-4 mb-3 border-bottom border-1">
              <div class="d-flex justify-content-between">
                <div class="d-flex">
                  <div>
                    <img
                      src="https://th.bing.com/th/id/OIP.fsEKuME97L6IGTgu_GFgVgHaEH?w=304&h=180&c=7&r=0&o=5&pid=1.7"
                      class="rounded-circle"
                    />
                  </div>
                  <div
                    class="food-text d-flex flex-column ms-3 justify-content-center"
                  >
                    <span class="fw-bold">Chicken momo</span>
                    <span>#41551</span>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="me-4">
                    <span>-</span>
                    <input
                      class="rounded"
                      type="number"
                      min="1"
                      placeholder="1"
                    />
                    <span>+</span>
                  </div>
                  <div>
                    <span>$10.50</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="order mt-3 pt-3 pb-4 mb-3 border-bottom border-1">
              <div class="d-flex justify-content-between">
                <div class="d-flex">
                  <div>
                    <img
                      src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCADJAS4DASIAAhEBAxEB/8QAGwAAAQUBAQAAAAAAAAAAAAAABQECAwQGAAf/xABGEAACAQMCBAQDBQQGCQMFAAABAgMABBESIQUxQVETImFxBjKBFEJSkaEjM7HBFWJy0eHwBzQ1Q3N0grK0JJLxJVNjZLP/xAAaAQACAwEBAAAAAAAAAAAAAAADBAABAgUG/8QALBEAAgIBBAIBBAEEAwEAAAAAAAECEQMEEiExE0EiBTJRYXEUgZGxI8HR8P/aAAwDAQACEQMRAD8A9PJbJ3POuye9ceZ966jGBdR7mly3c02uqEF1HuaXU3c02lqEFyfWly3emilqEFye5rsnuaSuqEFye5rsnuaSkzUILlu5rst3NJXVCC5bua7LdzSV1QguW7mkOT1NdXYqmk+GQB8ZM0MUjRyfOPlO5GdqyF9xK7tLaJIlVrg51ZGDpJrV8cLMxjj1atI6bE9hWK4vbho4tXim6DHxGZsqU2ChRz2968N9UxRerSkvikd36e1tr2Ujxe5kkii06pDIigIcEnqM0YN5JGrKZS+tSpAIwARggbVmhazQSpKpyRhl25Z96W+uvsUcUiu3iyZXQd1BGCXJP5ViGnTkvAZ105JWugha2TyX8IZsRTnDSN8sP9r36ZrRHgUaM7SXKC3Vclmxlexx/jWIf4klisZ/sLLBcOqiZ5AJC6cimlgR7V3DE+L+M2k1wk6/Z/EZEkmYgEpsVjjQHbvTMNBKa3ZF1+6ArWz2JXyb5o/hm1hNlIokhkANw5Lamk7kg/wqG64vw9bJrTh5QKiYwxYfs1HJSetYvXxeFks7wFpdWmOZc6GX+vncEVZxw21eBLi4laRx0ACbnl3oeadXBJV+ueA+LA8i3t89iXDX3ELgIsUjyFQsUaAkBc43J5U1uE8Rt5FVow7llx4bBhlumf40XSdklkW3UJHJp1y53ZcbAE70XtrV7lrUYgkjRiWV3dGI6aXQc6vRxWaPjiqZvNlnhalJDOEpeWU8KujByBgAggg7Gtllu5qnZ2MFuNfhkStkHXIZSoB5BjV2vSfTdJPS43Gb7dnI1GXyy3CEnuaTJ7mlNNrqC52T3NJlu5/OlpKhBMnufzrsn1rqSoUdk9zSqWyd/wBaSlXmahZfPM+9dTA3MN35nrT9qynZKOrqXauqyCUtQPcLqKxqXYfRR9aryvegc0VT+Hc1hzRaReLovzMB7mmfabcf7wUPV4kDGQ627seVI9xEyrhVPqBSuTWY4dsZx6Wc+kX/ALVb5wGJP9UZpTcRddQ9waHRzquSoAPLOM4p5unIO4I+8CN6zHW45ezUtJkjzQQEkR5Op+op3tv7UKR7dt2BGOeNs+1WUaAjya1x1yaY8qq2LbH0i7XVWW4K/MNS9xzqdJI3HlO/rsaJHJGXspwa7HYpa6urRk6urqWoQjeKOTGtAxAOCRnFZq++HrmWUyrokQLqwDhyQflC4/nWopaWz6bHnVTRuGSUH8WeYzC2kknihhkLQeSTWFRVP4c88/SstxG0mkkk1FZVSMjBz5SdwAtbbjMF3bXV2tlBBokkeV3kZy3iN6ZrJa72J5GkwLtJtZOPLIH6EcsVxKjhdJcoK5uS55M3Lwi+URnw5SJE1ICukkexotwbid5we2uLWa3ungMpnURKQVJABBB2q6V4jcLEk0uiNXd2Ckl31DGMnpVkrgELjlgUZZpyjUkbx42+XwFpeB8VurO3vVgaGWdFnSCR8yIrDKiQAYBI6VnfHvreZ7eaBWkibH7RQ2lu6mj9pxji1t4a/aWePXGzrJhiVXGUDNuAaOzcQ4HfwTItholbSFZlTOM6i2R1rmy0rVuCtfh/9M6WPVPGts+f2Z3glpPcO7T27OdWAG1D1+7/AHVv7SGFFCiPw2QA7NqH5mgvD5WiuIIYFVlkbGHGdIxuQRvWlSMJnJBY82710Ppuhljm80/fr8COr1PldJC4pKcabXoTnnUnelNJ3qFiUlLSVCCUlKa6rKEpV5mkpyczUIShZVzqOo569KRp0hBLtlvw8z9BQF734qnlCW1mohz5pnYZP9kGiVvDeJhpIwz9Wbc/Shddm2EklRo/E3UdQ2xFQSPcyjES6UPU8yKbLISEjOM5y4HLPaoZ5n2XZdu5wR6VmUi0hjSmFSoPP5vT3qrJPoVnZifwYzlvQCpACxw2O46/Sq7mNWGrzOfkRdyvsK4ev1csa2w9nV0mnU3cgfMOJTsWBSIEbAtgn6VR+0cRiOCJAFJzgHG1Eri2BYO80sQA3yNftTdZCeS7DaVPldcZxXl2nbb7/k9JGS20lf8AYmsp3mjJf5gd81b1YVsfhNB47+CN2Mp06wMH1q+l5biMzKQyrt6Fu1PYc8VBW+hXNhlu4XZNATIqyNKNBJG+2cdqukgqAvy/yoLNK14dUGx/DsFA9Kne4lggwXUuqgEA8qI9fubi+gK0ijTXYUjbw1KqTj13xXa5daNk4U7+1CuHXLySMHYnUDjPcUWwcGndPk8kVJC2aGxtMJRyKwUE79KlqC3EEsQOnSwGM5yc1PyC/lXpoO0efmqZ1dXV1EBi03XGG0l01Zxp1rnPbGc0K42OLtbEWPy4PjLHtMw7Ke1eerxGa1vY5TkzQS69EuQdYyPODvXL1WveDIobG1+SXRrePIVuJCNs4b9Kx10VJbYc8E+tEbfis97JMl1K8krjWrueR/CKpXiDz7bnOaWlkjnW6IzjaoHM2CN/Sl1fke1V3ByMdD3pwYg7nbtmgJDid9FlWJI6jbNEbfmMUKQnP0x9aK2uwXsBTOJWDyPg1HAYdc8sx3EKaRn8TVojQrgirFZqfvSszt/AUU1V2MaqIhJ2zjTaXNJRDJxpO9dSVCHUlLXVCDTXUtJUIJTl5mkpU5n2qEHMk8DExedAd0PMe1TRTJINtmHNTzH0qFZZMkMaQaWniIGGDbnuMUO7NEyCJYnkZVLnUfNv+VUJAHJyAevpV9YnkWTlpBOenKqrDAO+Rnp0pbM6jYfErlRQkwmViH7Qjck7J6mhtxdRW2pYz4kzZ1yNzBPRalv7kqGSMEKTgt1PvQWTUxPPPvXkM0pZJuz0+nilFFqGa4ndkY+Rs6j7jrmntYBEbTcAyEEAdBnvQ9DIpGnUNRxsD7UVWKCFALlmMrDJAPyZ6UnKNLkdcq6BQgMz+GV1FDjIOd+VEyljDClq2RpG7KR8x3JpbSFbcyTIC4fyxK25xzJOKWSO1uvFMzCCRB5cD5vcVnanFJdmpTuVvpDI5bC2GE1SMdmLHAHsBTXeKXzxpp56tyfrvUc8VksTLFqLoNRcndvpVa2mwwXmreUjuDVxiujMna3IkSR4xMYyQ6glT0zUcHGOIuRlyRyqUaYpQHzh8ry51Pw3hZlmcuD4Ak+795edOafDPJLbF0JajLjSbkjU8Fd54I3fG5Jx3OetFmVhnPv+VVRJZ2FsJHKRQRgDLH9ABvmki4rZXdtNPB4rRq5gy0bDMhHRTvXsMTjjUcd8nlJyTkyxkVmeOTcct5XntpZI4FKBCGXQdtxprQJIrAFWBAwNv51W4kbY2svjRhyFJQN+LpyqazFLLiqLprkEUeB8bbiQaG5RYruPHLZJV/EoP6ih13wbhXEeNG8uYLmT7YnhwLbnwoljgGl7iYjByxOB7fmBN7ZxXUMcvlaZgoEIdJEIPm0jJyMetayP4g4IH0Rm4eRAIYYYbd5JCg9F5Z9TSmmzPNj2air/ANmarsD8R+H+H8PljurXxtMfzIz6wPXJ3rN8Suoo1DAgl2wozv6mtpxG64hLFLIYRaxBCwEhje4KjfcHyj2rzPicnDpm12st20mok/aFUICdyABUzY4Q+zgKpKKpDmbK6lJwTkUnmJO3Y702NLhIFOjWGIKleWPeu1XRO1vJ9RjalKdcjuJtotxY2JO/ar8LuWSOMZkkYKiqCTn2H613BLCC6aeTiDSRW0WlVWNtLyudz5hvgfzo5BwyzgF7Nw6WSR2QLonwZkj5kRsuOfWo86xppdhFic3z0ELW9gs4Y4kLOVB1sx5t9KL217BcrlCA33lJ3BrIJ5SGJwQT5Sf4g1KsjK6spKspypzgZB9KFg1mbG7lz+guTTY5cI2gbJAG5Paqt3xPhdgmu7uoogThVzrkc9kRMk0GmvLu/WK3jnFsZGxMyhj4i/hDDDD1wd+WRVUfCNlPL419f3dw5wNKeHCgA5KoUE49M11Y6yefjBH/AD/4K/0+PHzml/gNw8ZtLkaoILiRO6PamTHfwvF11cgube4DGJslDiRGBSSM88OjbihI4FaRRqljcXFmy8mjWCTJ/riRDn86ozXPE+G3dot7cRTsykW9w0C26zrnDQNLGdIYbYDDHYitebNi5yrj9GfFiycYnz+zVUlQ29xHcxJNETpbIw2zIwOGRh0IPOpc10E1JWhNpp0xaSuzSVZR1OXmabSrzNQhWur6KElI1eWXksajOT71FbQ8VndZ7lxCgYPHEvMY5ZxtROO0tIDlVBIJOTu35mnTShV2GO1DuujSJIbgEvqG+POp6HvjsarXCtolKKTknTpx+VUvtbxTLIVygyHB5lTzAoxbvbTx6kYMjHZhzUn7rChSSkqYSMtrtGAuLt4Lh0uVIVjjf7vrSOithlYFWGxBrX8S4NaXqlZANR2V1xn9KyScD4jZcRt4mkJs3kOWG/lAJ049eVeb1GiyYvt5R39Pq4ZFy6aJ7aMQRm5kycZEKnvy1f3VQlld3ZiSQSSTmit/4uSCjrGuw1KwUY7EihnhseQ6bkb1zZY23T6H8WZfd7HRXkqKFViAaikuXaZ1Y74Bz7inGI55jI9CM+1Vp1IuFPLyAb+lCeNRYxHJFstRksSuRhgQfWqtujiVk/C+21W0TRpYkae+RUN9qjeOeFyEkwrad8OKvbb4AvLVr8lu6M6PbGNCzsQYyBvr5ECtZwy3eOCLxca8am0/iPSgfAYLi4cSXAkbw949a4VSeuT1o9dXxt7i24daKj8QuY2mOveK0th5TczgbnJ2RcjUc9ATXpvp+Co737POazNztGcU4ab+W1jF1DGyo0ghfJbw84MmF3+tCYrbjtpLcQWlpO0KyLKGcIkcrKCvN2zWitIYrZHOt5Z5CGubmYDxZ37tjbA+6BsBsBXXN3FbpqdsFs+GME5wMkgDfA64FMZNBjnk8qbUvymc4zkk3xn4yMOHWkKqwBC3EWp1PPWSx+m1FJIb+6UriMDQpy7gFWIyUbGx9CKHz8UQtpiYO7bgjDalOfOM5BHqCR01A7FP6XsoomeSV7ZIl1SHTrVj1wvc9KYSWNfKTf8AJIQcnwBeMfB3HL+6tDBf2NtHGraFUymeRj87OyrgL0olwz4Z4rw2RHj4jaIpwJVhSTLr1GedKvFHQG4EhaSYAmNtjDEPljX+J9TVO8+ILhEOlmDFXI07FVGNTDOxI6DNK/8AHJ75f2GPBKT4NHcoqBlRBKdJ+T77DmoZ9s/WsTfcNtHkee8ggskLH/WJVVm/6I6ZFecQIllmuZXabA6rqXAC61H3q7iXBmvYYZVndb4RqoWbaAqTnQWALAjvSmt1KyVFSo6Gl0sYu8qKrcQ4BaIIoUmuFXkIgIYgfQt5v0qxw2b7cWmPD4IbGPUA7s7NNKDsq5O4B+bb0rLix4i98eHGFo7ld5RJgLFGOcjHlp7b71soohHBb28R/YwoI48jGdI547nmfeufPGlSfLOrNwhH4ksz+K5CxgM51IIVChz1GAOdJbTSI6yRyFWXPNeZGxBHL3p6xuBh9WTtuAajkjaSRfEyWGNJB/ef1WIxv2P0qvHs/uKKanx+C74ZvZJ5l8OGQoCYlwqTNvkqDsCfeoIhryChC5ZUB2J39frT41lQEnGBnIP4h096s6beWMLKirKGysiHtk6T/KtpbewbdlTSY2+9gEKOeCc4AGKIWt/LGxExZ0O3PLLimNHITnw3KKG8NWYDxTjZ8jYVXdFEq5MjFcDyKCqs22SB+XOt8we6D5McNbZI0MM8c6B4m1LnBwOR7VHe20N7bSwyoGVlJAIB3x0oVG8kcZWMjzY1EZ5jsaLQXEUvhorHxCdJVhgg9662LWxyx8ebgRnp3CW/GA+AXEltfXXDJWLLJH9ot2Y7nwsKyn6Y/KtPmstJF4XxVw7SdmjuJMdg8LZXetMDTOhbWPY/TaB6pJzUl7RJmlpgNdmnhQdmnLzNR5pync1CCTSm1yS2uIHfuKja6SdQ0ZBWpJPBw5kdNODkk4GOvOg7tKGZuFx+IM+fxdkUHqKGluLuhb64igiZ5WwPuqMamPYCs9BxD4gguDdxO1rbjIELLkyDuwrRxWdrI4mlHiXPP9qchT/UB2qtxNreyS2urjSIY7+xSYkeVEkmC6m9AcZrEo1waTJ5fiDiccdhaLZ+Nxq+1vBZxsIlWBNjPeTHOiMdcbnl1pPsXHbnfiHH71WPmMHBFj4faIx+6r6WuG9y49qWxSzkml41bz+OeIKlhM40lIPswbEakb4Y5JyeeO9XpJEUAuWAYgAjPP6ULLPZwjWOO8opwy4hJEHGeO6xufH4lLOD/wBE6sh/9tNa3ml1QziIXOQIrlIlhIdtlF1DH+zKk7a1xjqBV9pG1iOVCFIGmUHA1noAN6WVZRIrqGkNrDM8oRA7yLp1iFMHGpiP85oH38T5DL4cx4Mtbrxy6gMsXDHYLLNA5R0OiWGQxOhUnOQQf8mkm4D8QcS8NPs32V4W8zzNgMG7acnaqHwr8YT24+IftVs0sl1xSS/0kmPw2mGllK8+a5NGbj47uVyYrGJfVmZjSb+n4IyttjsfqGVK0kLD8E8T28biMeDj5EYn9TR/hvw5aWR1SO1zIDnLgaV9QtYO4/0ocVUlYLKBsE5Zhj05YoS3xr8dceurbhtlIIpruVYIYrdQmWbqzkbAcyewpjHpcEHujHkXy63NkVSket8W4zZ8Fsbq5ASeeJ47a2t48F572faGAEdTzPYDND+DQeCs0164n4tflZ+J3JOA0gGBFGDyjjHlQf31leFQ2V3dRP47y8O4N4ltw6YkkX/EX/1ziTlsk5byx7nAHpWiuJYYIvK4LuDpxzx3p7dXApVhi4v7a3UkuuFHdf5kD2rHX/G/tkjZ2TLiJcMR+zznCnDa1+8vldealhtVDiV87K1v4mVKs0xZdalAQCGXcMinaUbEAg9KHxR/PJceWJNGoSNqcmI+VXfr4Zx4bjcg4OaDLNSsKsVugxaMceMx1O5JTU2vykY1ahgEn8WkEjGQSM1UlY3U4kBzbQSHwQDlZJl2aT2HJaoy30spZcmKJsht/wBqynmBjYZ/OmNxGGFVXkFGERBvgDYAVz8mVz9D+PDsQWkkCJqYnb5cAtv7LvSWHCZr9/tMtzFHHrJYMr4bRnRKo+VjjYYxjrvQ6zS54pNli6QRYE7IzKug/c76m6dfoK1SRAhcJojjRViiA0qEXbb260q5NypBpfFFMcNliutQkWWBQDDIMAl+Z1LvjHT/AAokUOkZznSDnv1prF0wy6SdmZdxt2ArlJnDqGYHOCcfJtnPvQ1DbKmVKblGyELEfE8RR5+b482xyAxG5HYVKsMcaq7EMuAqkHbvz51zxBd/PkY5DPPamAsmQACC2JA422PKq8ex2it+5UyTw4mIBZizjAUHnv1zTmtQVwQDjO2flzUkaozKY2yrABhjJU9TqxuPpUzhNJSMHI2JBIALdBmjRpqwLtPgosAAqjUyrsDkahjfYsCKkxE26kgZDHOx/M1O0JUDlkLgE52weeOVQftA+lVOkjdjjGaHJbf4CRlu/kkAJKhn0opzjIII64xvTihL4aMgBcRk/IxbOCdO2BXIyaRpOR2Iww33qcHyvp8uxHhsCdx+lajXaKd9Mr+CyZO2cEdCM/40/wALLRumzoA6Ec1I/WlOW8JCwViV3XOSoOSMtVlEyWKnGMjGxO+/OrUVLgptxKcsNzccQ4fdslsFtdb+I7MkuXQxlAVByDnO9FQQeVVmUFdwBsc6tx+ZrO3HxKltdfZoBHLBFs8oJ8zdQp7DlTGDU/0rp8pmZYHqft7Rrc4rqhhkWaKGVRtLGkgB6BhnFSZr0CaatHJap0OzT1O53qOnLzNWUVP6MkuJNV1K2kHaKM4H1opFbQwoqRqFVRsADT1UZPLJ54qTl6+1CuzdUV5bS3k3xpfnqAoHx21EnCeK2k8TSxT25TUvMHUpDfQ4NaQ79OVD764tWguI2ZmUoVdYxkYbY71Tbrgio8T4V8Q/EHwrdTwp4c1uzFLi2uAWhl07eYcww71sbX/SH8KzHVcWvFOHzuQ0gtmhubcsBzGvB9tqC8VsYLue4E+pZmwDOnN9OwZlPPbFAX+Grwk+HPbMp+8wkQ49gD/GkVrMM+J8MO8M48xNxcf6SfhyEH7NBxe7bI/eC2tE9c6NTU+7+MLW6tFPDv8A01pIAGkcBZNTHBjVV655nNYdPhSVsE3q7/ggJH5swq9HZwWEcUHiF0ikRg76RlmYk7cqBl1GGSrG+Q2LHO/kgiltGk9/OCNVxIjNnbAVAu/qdyfeuaIMDgZGcbDO/baiPD76SwYTJYcMvBI37Vb6FjKAOkUy5x9UNbTh3xHwS6jSKS3awmOAIWEZiDdNE0e35qK3gSyQTbB5Vtk1R5tbfDl9xC48C0s31O2JJJEZI4+paR2AG3bnRq++HuHfDNtb21pO9x8Q8dM1jHdfItjYMALqaGMHby+UMTnzbY67y6uiFeRpRDbwq00ztllWFBqZx1zjl3rEp9rvb6+49fxtC90iQWNvJjVZ2CbpG39dvmf1NNcY1yCUdz4HeFDZxQwQIFghRY4lXkFAwPr3qKWWRYzIxUyOVWMSHCAsdK+IRuFJ8ue5FTOIYo3urtysWl3SNCDLMEUuwjTrgZNA7y7a7llL4FvGGUhTlCrAApH1KSDw5B2YetL37YwlzSGF0ctIGcR6klMr4EjMoGlz01gaopNvMMGoJrlSqqAFiQARINuQwCR2HQf5EM0zHzSbb5Vei9s9z3ofJPknJoEm5DUIKJLLJI4YI2ljsD2/OnWtu80scMY1Svgu5yVRRzdt+Q/wqkZJHYJGMs23PA9ya0vBoHjiYNgsTl2AHnP17UKb2rjsMn7D1jbw20MUCOWijBYs4VWkdjkscbZNFNtOPKBthR69MjeqFshwPEVfKNQXIYg9N+VX1TV5pCAowyq22cdT1oeONIWyS3M7ZAW8wcgE5zg9MYO1DyjpK8jl9Mh1OYpCr7Hqo6GiBOpmHiYOBnSC2w96jKK2CQoz5BqG4BO4FXkhvRMc9rLKSxtGukglgGUb4A5DY9aZJbnCurZ5+UnUSB6Cq5la2dFQF42OklgCFHPbParolhCxKpLuEJJIID47BqkZKXEu0XKLXyXRWVWT5Seecg4I/sgVYSRmwHd10sGy3yye5B/lTR4cmmRW2ZMlcYbIPUHf9Old4WSxJBGVOxySDvuD0obh7iy1L1ItFUcxlXwqHU3MswGfKarSIsjDSSyNvlNiQeWKWOV4hpV/LnGXO4zzy1TLnyOQjMyrqw4KjSOaaV51FLd8X2RxrldEIjOcoNLKNODuQO1SKwBXWcMdsHZu/I0+MMxZmzg5yTsNuvfalaPUGZURjpKprYqGYcsnB271NnuJal6kI661ww5cjtmlibS2kjA2weQOOhrPt8Sw2989syhrZWCCaMkHUOZ36VT47x5mY2dpISgIM0indieSqR2ofkTVrsOsE72vpl/4m45bW8U1jDKDcOoSXTk+GDzBI2zWU4RaS8TvYreMEBvPNId/DiHzN/IVRu7lryeBADLMiCIsBkuc5AJG5I5Z/ur0T4e4fDYWigaTcTANcMB94ckU9hTODA8005G82SOnxVDthtFVERFGFRQijnhVGAKdSClr0SPPP8i05eZptOTma0UXY5ImBKHYHJ1cx702W4SNHcnCLzOeZ7ChV8RC3jLIdIORBCP2kh7A55U21UXTxS8QXwmH7q2ydC7582etZ2+yNl1DNeqruWihJyEU4Zx6k1S4rMllaSiEKhYquTjJ3FFZXRQd9ug7+1ZHjsrSIVw3mOFycjJIzilNTkcYOguONy5A19KJpUfSNRQBvcGkgkkjAIhgbHVo9/zUg0N4jeC0hiJ2l1Fcnfy9MCr3AZLviN5aWi6GE5Jyw06EVSzNkdq8vlhKT3Md88Y1BFxblJJIlmsoXQvhlR5ULemcn60P4/BJNd2/iLFGqxQNFHHGFjiRCwCqo/nmtu/AILQpcz3drFbpLGWedhGp8wONT4G/LnQf40SFJ7CSLwypsk0lGUhlE5Ixp261Iwli+VUFxzU57Qfw3h00ywMyOIpUkKMR5SUYqcVNxbhTQWUvhuyzTkW8Wn5izg7KavcBnYiwtmlJCJcPGm2MO5bP86Zx7iEMhvfAOf6IvfsjtzH2o2xbK/2S2n6Guqns0u6PYONS1G1lXh0t5YWT8J4nxG3ncvD9kCCaa5MUb5dJFiRjpBAAJ9ulR38t5BouLmMyRO3hw+Dq8IyEEqjlgCpbGBkDes9atPN/SMkc7xyJCJVCEq0oTSqqzA6tIGSaMWHHEihWO6W5SORQrBpTcI2oAsskFxnkezDvWFkytJy5QxPHjUml2CJLia9kM7SkRgxyo48qpoOuJkB8upctHIKgkliRVCjTFGMRJvsO+/6Vd4jBbhGu7GRJLIHLRxZxC7HJ1hvNjPLP686z8sjOTuaPGXk6MKGzsSadpD6VVBZjgZzqx6VJg1aggUeY7ljnHrVykoo0lZNY2uGRj7DvWos4y2hQPu8+QB5ULso911DccgMVooAVXBKg8scz79qUtydsrI64LUZEe22R0UDc+tWF8VySy+w9KhiWNAcA6+eo6cgDlkmpMAKdRIJGW7D1OnfFE6FxzRahjxNDEaiw3JwDgcwO1PDt5FyCQoLBtO56lajEXlU6g2rnlsZP9XP91SiDDIRtoyoTIwduvXaqV+i7GMsTAq4XQdsNvnrvSRhYJXZ8ODjwC5ZgpxpIQHbOKnEZzsdLKCZGkBYY54XfFSiMnGsbnScFe+4wD/kVmWPdyuzcclcPo6FreQ645GZhgaSykf2SDvt2p7IpZwFCjCgaT1Gx8vP9arNBpbUqFWK51KuNOM4yeVPSRkKB3GGJUFdu5ySNx6b1N0o8SRdRfMTmiDNpX5fmOo4IB5YwN6T9pGToJKjGQdxv6VaYxgBG2z0zkn2zUTNsSUKgZxqIzgDntt+dYlGL9kUmuCW3mt3cGX9mdOnn5SeeN+XrQf4o43Hw6NbOAL480IbVnKpG2Rq9z0/woPxnjMYmjt7eQFEbVI6HId8cgR0FZLiV891cyyu+rCpGpJznQuNvSqhck4oYhiSe6SGzT6ubKCSCRVaS5YKyKdzjUew7VTeVV3zvn8jUkEckjRsyssbE+cqdJx0BpuGFJBJZQjwyOZ5o5s6Y0bOerEdB6d69G4dcs8YOdxvWMtkCIoUAAAYx2FaXhDjDZyQq5IHPA7U1hqLo52olv5NRb3CTeKmRri0ax6OMg1YBFZqzujaya5T57iXVNjON+YH9kYFaUYIBByCAQfQ8qfxttWxGSpi05OZptOTmaKYHWnDjCzSzt4k2rIJ3CDpjNSXMcTqwwA/RgN/rTbi8wSoyN9sCqDXAOo+Jj3yaE5GqK0l01uwhn1lGJCMcc+m/ahM4ae7hTnuzkHJGAKK3MaXMTJlHOMqV6H1zQywVvt80cudVvFoc41bOwwcD2oGSHk4NJ7TzTjV1PcXtx4jZWORkQAEKFDHGK1fwd9tgK8RVljeWK5srJLyOYQNMyDTKZkVlwCCNOMnvVX4kseKx3lxLZW8b2UpOIyAVXoTpfffnsaD232uAhVD4bAeKNjjPXQDXMy42oVXQNdhvjyfE0UkZ4xPNcq7hYpkd5bdnfcJGMDB7DSK5eEcXt4RPe6ba3wMozh7hs7hViX73uRWnFxHJwCJZn8cW6WnE7KQnJb7DOkkiNn76DVn0PpU9+8F3PcNsYbUtbRLjZpmUNLJn6hR7HvXNc7XI3CFO0zKWPG+KWt3DLHb2OY9KASeIF0Dpsdj3qzaQXEqcatpyiScUvr24iZGLxiQsssTqx3IyMfWh/FGtrRyiEPdSZENug1SMe5Uch3Jp9n9qis7dbqXNwGklYg58Ms5cBcdqZm5eP8INp4vy7mP+HoY5bnjHDpMJcrGpgZugR2VkOehzg+3pQ6VJIXlWbUJomaJw/NCpKlQKZe/a475eLWcmicSAsSTo8Q7aW6eblvsc460buxDx+xHFLVGW9gXw+IWpHnBjG4K88r07j1FEg1Hl9P8A2PZU27Rn0nkiYyxPoJBRs7o6Hmsq9QaglRcqyjCt93OdBxnAPUdj/dSyPp8oXJYcjywadCfCbw3/AHbfITzjJ6H0oknsdxJH5qmLFDjBYDUd8dhV2GLUc9ev+FRqCDjbbmevOiVtENtxv82fyoLbfZhui3aQsAu2PVT+hzReFHBAMauACxJOMN9evaoraLSA22nkRzO3WryC3Axq1OQMluZHLl/hRIxSFpSseqYxr1g4JKgD6DI29alABBUL8uMMQWHbB/nSQQjU0o16uYUnUpHQrgVOds5f5Tz0jAOCcfWt06MWN0k+GXCEqQcsp0jScgrkU9QpKjkq5+ZiTmmgagrBzk+bVgY3H5VwR22VGIIwGBOlgMHbG3vUIPVWJbDeUbk9MZpztkjcgbjBPzH6mmxTxyKgRS+mUpJswxpyC2/TtSsE1ZIy2FVQQSBk59s1G01wUIodkDE7ZO5ycjHMVHpJYseYG2xz7HpU/mCDW2VUYOOWo9N+1AOL8T+yr4Ub4kkDasnBReWwHehZJKK5C44OcqRYl4vDDc+BrDQY8ORhkaG6lSN/egnxDx9WtxaWr7yAeMyNkBM/Jkde9Z674kEV1jbMhyMn7ueZ96Du5wN+53ocMblyx9QjDlk89wxAGrHc5/SqJaSWVYogXcnCqOfuTVqx4bxHi0zR2kbskZHjSqpKRg9zyz6VrrHgEdnHgjS33icFmPcmujjxbULZc4CtOERxqJJgJJsZ3GVX+yD/ABq8i42IBHIgjIP0ou1voOBVKaLQwIokosU32OhghONLMnpjUv8AfRnhsYjMpD6gU7YGfrQy3XP1omSILOdthqGnzZxuN89cAZJomOK7BTfFFGWYyTBwTjUscYAOTqJK/ngkZ5EMv3q2lhKGhjiJ8yIAPUDbb2rG2ceuVZWzhS2xxnxDjOcfTV0JAYfNWl4VIxuZIwMotv4rH8LM4VR9cH8qYg+QL6sM4p68zTKevM0cwUOZYLknlkggb9s71DJG5IUkn0TbH1ozJFCgLSMkag832+gqg8ss48OwiOnOGmIwdPdc7Cg7Gy7BF1LDYg7K1ywysSyaWHrITnA+lRcCa5uLrik9yoV9UMQCjYKqkjBPvRqHhNvb6pJQskpYsCU2Dd9+tVuEqZBe3HSe6nZeWNCHQP4VdJPgl/kj4lbh42GnOQTyrFGCOO6OSmEbzeZQR771p+P8YhitFNnLDL4ysHkVvNGpG2kHByfavO1uJGu7fRlj40ewGSV1DVke2c1zdTmU5bMZSlT4NNe3C28U01pIVaRWaSFV1wSMUKF2X5QcHDd/45K247xS3Se2S6GbiRdc7lmMYUaCYxyHc7ZNFgz3F7efYCxsYTqExJWJTp1FVPXr9KoTJFdgO9vouGCskgC5ZTy1Y5g86UxYnC98bv2FWSV9BO2isLeFpLaVZ5HUtNcFtU0h5nOdwPSoXvD+xx8ryCM+moHB/OrXBLMmRlKsVVNROMDOdqo8Y4bd2Eskvio9vNKZY8YDwknUFZeeB0OKJLTtrcx3BlSdMkWfQWyFZHUpLG4yrqeakGrNncnhNxHexMz2MmmOR9zJDvtFc9SBzRunLcGgySs4BJz6/wB9W7e4lgYlcFXGmRHGUdezClnGlR0IzCvGOGQqf6UsgptZ8NOicoXbfWOmlv0PoaCShm3QeZF2B+8Ooo7YXb2YxCon4TJrFxbsNU9rr56ByKenbl2qvf8ADltSl1bMJeHz6WhkQlhFq5Ix7H7p+nMb4hOviySjXKKtqyzRq0e+NmB5jFGrZFCA4zkADkcA9cHes5ATb3ecEI7ASL6McZFaa0RlbBWNsY0DkXUb7ctx70ThMDkVBC2DYbCk5G+Tsw9KJQqfKHiOoITqcqxHXRkEHfpVWCJHwyPly2QxwQqE7oMVeSRclRpLIfOSeWBttz+tMQE5E5aMKG1aSq53+4P63Wk/YSNGGKnSwOFPPY8zipFjSc5k0OWBDgqd9geYIapEsXZ1bQqpGhOc5Z+YUHbljpRGmwdobpU/dzkE4ZsjcbkBdqWPP7WTKCJDoRYxuCPKc9NqcFzgbqoPIYGMfdPvT32wH0n9oVwvJcAc9s1XXJCHESgtFEoL5kc5wXOMZJ9ajTzNknBIOAc4HrmpXVhqUjAxoCqdgB0GKGcU4hFaxSxq4ErLgADLZ6cv/ilpzUPkw+PG5ukQcX4olrCyRSRpISVGn5lHUgCvPr3iG7nDM+CcuSSSerURWLiXFLhrfhtnNdXDthtA8idS0sh8ij3atFw//R4kbG54/OLo5DfY+HStEmB0eVwGPsCPc1nDillfkyLgenPHp47F2ecwR3d9MkVtBNc3EjbQ26NJIzH0Ucq23DP9G/ErgJPx68WxiPmNraaJbvHZpDmJfpqr0Czm4JYW7QcKt4LWKM6XihiETq3/AOUfMT6kn3obfcTZtQDfT++uvjhBLcuTmZdROTroaU4Zwm0j4dwuBYbeLOxJLu55tI53JPU0MeXVqPP0NQSXOpiD/kUxpMjb6USxeiCctkkVUYl8Ke9XG3B9edV9BDZ5fwrLNImgQK8a96fxGVgIoU3KnIVT98nHMDY+vqOmaZbsfEDn7vL3JwB+dcA0l5I7Y0RMVUnuMr26b9epHWrhwjMlZZhiESIiYAjUegHUn2o9wRM2n2wqytfMJlDbEQgaItumR5sf1qz+lp57azQkPeS+ESPuwKNUz/Rdh6sK2KlVCqoAVQFUDkABgAUXGvZif4JKep3NRaqeh3PtR0DBgkktHH9OT+NIdJG+pU7YxjI+lETxKFQNOPDXloGdvTFYzid087BX1lwcqyE7Z2IAxj3p9pxCK1gVJw5KuiqVKuVi3Z9ieYHy+9IT1uJycb5RSaiaa7vle1nddY/ZsFyMZZhpAANBLHiF3HELQ5/+pzmy4TGsWWht418K4u5WAzjOrSD1GeVD+D/EEvFLiLhF2nnkvw9rLpGt4EJYQSBBjUNvNgDnn1q8f+IOIW3xPHb8AihvLiG1e08GON5wJ3YmQlFwMqc9cbnPYTd5KlFmuZdFzjnBorGK3SCWSRLkSxZ4hMmlHBB8Qy4UDGf88qxtwljqPDrK7hmkbBvb6JnxIScC2hBUaV2yW3z+laWb4T+JOKxyX3xFfmW50sYrKEgqgO+HdfL9F/OrPDvhy1NqZeIWsZlUeFDGwOIYU2AAzzPWhLTKM24KrLSUSrEh/o62sILVCUDR3bRyAW+kHJ0THJOvYkgEgbc+XJwx55VkncbbCO3Xw41HbJy5/Or5szC6iEaUOBoXZQB2FF7a2woJG9MRh6kToy3GbocFbhi2zyieQtPNH4hMTQL5QrqfxHP5UGvZjfsbkElZBlQfuj8P0rZ8e+H7TiMTT6miu441VJN2QqucK6Hp6jFZa34fNaRNBMVYeLIUKZwAcYznvzrEoyUmvRcHyAV/ZMVf5CfyNSmYRSRxvssoPht0LDmp/lV27siuSBQuaMvGYW2ZSHhY/dcdCexpeeJN2dLHldUE7e4lgkDKd+nYjqrelFrS++zmQeCJOGzZFxAcN4Uj7llU7YP5H0PPP28hkjUkEMMq6nmrLsRVqKZomDDHYgjKsp5hgdsVzcuO2zoY5130TcVghhuUktiTbyxiW2JJYMqnS6ZO+3Y7ij1iVmhilBOmVFfcnKbDIXas/eCKSB7mFivh4kaMnOg5wSB+mf7tivA57W7tEWCULcQlleMMM41ZVyp3/wDisJ1BN+iZYX0aCNnG0enWxUbjIC5wShXvtV1AyKcLl+bZ1AkZxlSAfpXW1qkkSnWVbOt9MY0lScbjOc+tWo7URTOFfMZIbTKeXP8AdgbnP8qZgnVnOnXRLEWUksiFGXUzkgA9lABBqZXkyQAyLkFfMGDjGSQCc0jReIQ0ZygOG1MoOwyRt/CplRfOA02xAI8IBtI5AE9KbX4AMZlwR5sHsPKS2M4qJfIFwEyAQQD94nJIqXREz4Yyh84VSoA833m351WuJY4taRlnmDYOpQqqFO/nY49qBkdBIRb4RXuruOArBGGlupQRDBCGeVz6KN/rVL+gHL/auLAgsQ7wDUYVGyATPF5mJOAqLuxOMgZYCIfjG5sb2VIrW0gOpo5Y+IKNcg1bgXsQ1qf7SsK2Np8R8KvCsRd7a/ZPEW2uGQtIv47aaNjG49VOfQUbBpYTfkm7/wBF5Ms8Xxiq/f8A90Nivjw+OO2htl8Npfs9vaW6QpJJcBT/AOnjMeEMn3p2+RANO5BNTDiVrcIXjkRwTKqkHyyeCQjvCTjUgOwYDBoFxKa2UyPoZj4Bgkihbw3mtQuRZwyZCxq7YMpAyQOe+ay83FblnUw6TIzBHaD9lHObf5bS2/BZwffb7xB710rXSEabdmm4q4mYNHJouI8+HKu5wfuOOqnqKER3DT+KrjRNGcSxk50k9VPVT0NVYr83CBw+psAg40iRfl8aNCS2hjnSTzxTLjxW0TREfaIc6M8pF5mNvQ9KWkqe5B48qmWmznOaYrkHHr/nFRx3C3EaSJnDZBBxlGBwVPqKXJraZl/ssEHGx5700nSNOMk7AetMUuRseXP251FI6PHIzPotEUtLKcgyqBuFI3CdzzPTbcxlpE0EgZnmB/YWwdwRv404yo091X9T7b2IoysUYwNbgM2ORdvUgH0+lUrSbx5zCqlYoy8ZAAxqjwQpAyNJUqyVJcSO0sdjGxEt1G2pl/3Ft8skpPf7qep/q1cVSMt2wrwJklFzxLGVfXZ2TH71tG/nkX0dht6IKL/aRqxmhazRRRxRRKEiiRI40XYKijSFHtURnOob9aYTpUCNFHKDirCNufahNtLkCiMbZzW0YYD4mkN+Vnjjjt5FRYZoovKgkU4AwKynEZ7PhpYzXKvNhfCt4GWRvOfM7aTpGMDAznn9RvEpPiqVJJrme5nQ5ebwHbQMDGZDsenrUcfDbJYI725LSW5gWRULEeJkbl2GDk8gBXE8UHPf+TXjj9zLdrxC+uoZE4VZR2Fq0eL3iLktcSFSdQ8dznTy8oxv1rXfAnDr20g4ndzRBIL6VDavNEq3c6rnVK7ka9B20g+/XcN8I3VzcXai4hils4FWKOIxRCGA6s641AxkbdzXpTN19f8ACn8ONp7vx6KbfXoY+MGhd3KoyOlXZ5SqkDmdqEXCvJk00ykRCWHVliDvV+KaLSMY5UFMLk7AmrlvBKBuTuawmzRPfXYWJgBuRigGnxhLqG2QR70auYNSYxVaK30RtkbmqastASaDUpBA2/Wgd5ZncgVrJY8E7VQubcNnahyjYWMqMpE3hkowwTtnocfzqYgjfnVi6tee1VI3K5jfp8pPWudmxV8kdLDl3cSFBKnoyNs4P8RT4ILSOTxFaWKQZKSwsVZCfVd/88qi3Dsp5MNaeo6j6U8GgPqhlOmbe0+IIrWK3W4Y3CsI4zPAHCxpjB8XWd29gKOwXvD7mSCcToyqmVcCRl3DDTzJHPfbpXliOynUrMrd1JB/SrEd9NGc6YycYLANG/8A7oipoNTj9rJKGOfapnqxuLdlKpIhII/HhgO2N/zrn4hBD5FLvq/eNjBHQeGG7V5j/S8mCHE5z/8Assf+5c/rSDjEkSeHDEUXLNjxWwS3MnSAd/erc876B+DEvZu5+MWsdwsbXSFwVkKLkylBjLFQC2PpQriHGo1knMaOAzsVlnk+zR4OdwMGU/Rax0nE7liwV0i1DDC3QISBvhn+b9aovKWJZmZmO5LHJP1O9ZWCUvvYRSjD7UWuKzQ3kgcyh25YhjMUQHu5Lk+9Uo5liVYW8TwFkEi+ExWWCX/7sDdG79/1qNmqB3znFP4k4UkL5Pn9xtLXjT3kaWV54cs5j8WC7QFReRrsSV6SL98fWq17ADrkwhBVRMsraI3RN0EzncRLuzKBvWZtJ9LrA0pjDSCS3mB3trnksg9DsHHb2rW2lx9ttwzoEuIWaC6jODomQ4IxyweY96eTvk50o7XQOSR4WaXU2+l5GlBRpA/lE1wqjIyNreIe+BRdTqXIzg9DjIPUMB1HWhM8TQOwDNpBeVWLMCBIdJOvdwTyZ92Y+VQAM1asJdIaAgAAExqFChdJwyBQcDG2wJx1OpsVqjKZKR9nulIx4V0dLdlnAyD/ANQ2+lWtSqpZiFVRli3ICobiLxoZIwfNjVGfwuvmUjPrTSzhUluCviZRYogf2YmYEKM/iJ2BOw6eo0mnSNtppMfI6mNnlDLb+YpD/vZyqlyGUnsMhfTftVG4uZZn2w4QhoUX5HIVnUDPSaMsOfNcdKiknkncMrMPE0NEVBJjBbXBNp7xtqjl9DvV2zhVFdpFVXIAjQbiFWOsxBuRUHVp7A4raVGG7J+F28kGt2bOE8JATzjQnw3fP3gp0t7elLBOJZbu7Uki5dFiJGD4EQ0J+fmb/qqteTSGY2MLYQRq166/MFfdYEPQsN29Dj71SIdhy+lbRkveMe9OjYswqquTtVyBdxWlyUwvanAWikTfwoVb4AFEojtRUDZjuH/EDWEcltfmR85WKNj5mb8Lg8h6/wCQJ4jBxXikurTiB21AqNMSH26mq3xB/tOP/lU/g1ajh/8AszhH/B/voU4pQsifIvCoYeH26qAyhOnUtzyTWpW/R40IIOpQT74rPz/ujVu1/dQf2RQ8XBb6Chcv7GuaMkV0XIfSrQ5CmTJTW3GQcfnVpIgANv0qRanHKoQpSQg5qvJEACMUTblVaTrVEAc8W/Kqbx8xRieqMnM1lm0ArmAHVtQO6tuZA3Fam460Guev1peaDxbsAM+4QkCVTqjz1I6f309mVgHXI1DOD+oqtf8A761/4p/hVx/9Vg/6/wDuaubmioNUdbC3OFsj1t2JHcUniKacPkHtUPT86ylZpj/EXfcUwv7H0qCP55fepBzFaaoyKzHt/Kq7OeWw71O/I1WbnW48mXwRvnmGIPruKizIcgkfSpH6U0dKbguBTI3Y3QTz3rRw3Jt3t+Ir+6kjhi4igGcx4CLP7ryPpQCi8f8Asu4/5G6/nRELy6NFewiWLUm7LiSPD6Acrg4ccsjqMkDONzsJjZ43jZFYshQBQojJGklECEgDI+Vc4Vcu2WNGLX/Z9h/ytt//ACFCLr95f/8ANfEP/hR1sGFGuIEhE5ceEVD5XLeXbLAc8DmfShckkk0hEqkl9cDRowyNh4lurDGTss0J671YuuVl/wAHin/gVVX95F/xvhv/AMdqhGELeAxhpHIeUkszY21sAruoIyNeAW9c028uniEEVroa7myVDjKQxg4aaQenJR1PtvcHJ/rQdP8AanE/+FY/9j1lcsv0WYIvDQLlmJJd3c5eR2OS7Huf88qtIKjTpU61sySxjflV6HpVSPnV6HpWkZZehOMVfiO1UYulXouvtRUDZ//Z"
                      class="rounded-circle"
                    />
                  </div>
                  <div
                    class="food-text d-flex flex-column ms-3 justify-content-center"
                  >
                    <span class="fw-bold">Chicken toast</span>
                    <span>#41551</span>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="me-4">
                    <span>-</span>
                    <input
                      class="rounded"
                      type="number"
                      min="1"
                      placeholder="1"
                    />
                    <span>+</span>
                  </div>
                  <div>
                    <span>$10.50</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="order mt-3 pt-3 pb-4 mb-3 border-bottom border-1">
              <div class="d-flex justify-content-between">
                <div class="d-flex">
                  <div>
                    <img
                      src="data:image/jpeg;base64,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"
                      class="rounded-circle"
                    />
                  </div>
                  <div
                    class="food-text d-flex flex-column ms-3 justify-content-center"
                  >
                    <span class="fw-bold">Chicken Chicken dinner</span>
                    <span>#41551</span>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="me-4">
                    <span>-</span>
                    <input
                      class="rounded"
                      type="number"
                      min="1"
                      placeholder="1"
                    />
                    <span>+</span>
                  </div>
                  <div>
                    <span>$10.50</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="total d-flex flex-row-reverse">
            <div class="p-0 col-3">
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>數量:</span>
                  <p class="fw-bold fs-3 m-0">3</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>小記:</span>
                  <p class="fw-bold fs-3 m-0">$24.90</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>運費:</span>
                  <p class="fw-bold fs-3 m-0">$24.90</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>總計:</span>
                  <p class="fw-bold fs-3 m-0">$24.90</p>
                </div>
              </div>
            </div>
          </div>
          <div class="link">
            <div class="d-flex justify-content-between align-items-center mt-5">
              <div>
                <a href="#">
                  <i class="fa fa-arrow-left pe-2 text-dark"></i>
                  <span class="text-dark fs-5">返回購物</span>
                </a>
              </div>
              <div>
                <a class="text-light" href="/shoppingCart02">
                  <button class="btn btn-primary btn-lg">下一步</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
