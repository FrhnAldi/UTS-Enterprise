<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <script src="dom.js"></script>
      <style>

         body{
            font-family: 'Times New Roman', Times, serif;
         }
         .navigation-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
         }

         .btn-nav {
            padding: 10px 30px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            white-space: nowrap;
         }

         .btn-previous {
            background-color: #6c757d;
            color: white;
            border: none;
         }

         .btn-previous:hover {
            background-color: #5a6268;
         }

         .btn-next {
            background-color: #007bff;
            color: white;
            border: none;
         }

         .btn-next:hover {
            background-color: #0056b3;
         }

         .page-info {
            text-align: center;
            color: #666;
            font-weight: 500;
            margin-top: 10px;
            flex-basis: 100%;
         }

         @media (max-width: 768px) {
            .btn-nav {
               padding: 8px 20px;
               font-size: 0.9rem;
            }
         }

         @media (max-width: 480px) {
            .navigation-buttons {
               flex-direction: column;
               gap: 8px;
            }
            .btn-nav {
               width: 80%;
               text-align: center;
            }
            .page-info {
               margin-top: 8px;
            }
         }

         ul {
            background-color: #fff;
            padding: 15px 15px 15px 35px;
            border-radius: 3px;
            margin-bottom: 0;
         }

         ul li {
            margin-bottom: 3px;
            line-height: 1.4;
         }

         .links-list a {
            display: block;
            padding: 3px 0;
            color: #0066cc;
            text-decoration: none;
            line-height: 1.6;
         }

         .links-list a:hover {
            text-decoration: underline;
         }
      </style>
   </head>

   <body id="bd">
      <h1>Soal Essay: Document Object Model</h1>
      <div> 
         <img id="img1" src="/images/flo1.jpg" />
         <img id="img2" src="/images/flo2.jpg" />
         <img id="img3" src="/images/flo3.jpg" />
      </div>

      <div>
         <p id="text1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         </p>
      </div>

      <form action="#">
         <input type="button" id="chtext" value="Change Text Color">
         <input type="button" id="bccol" value="Change Background Color">
      </form>

      <div id="basket" style="border-style:solid">
         <p id="basketstat">The flower basket currently contains 0 flowers.</p>
      </div>

      <div class="row">
         <div class="col-12">
            <div class="navigation-buttons">
               <a href="{{ route('bootstrap') }}" class="btn btn-nav btn-previous">
                  ← Previous
               </a>
               
               <a href="{{ route('pages.dom') }}" class="btn btn-nav btn-next">
                  Next →
               </a>

               <div class="page-info">
                  Page 2 of 2
               </div>
            </div>
         </div>
      </div>
   </body>
   <script src="{{ asset('js/dom.js') }}"></script>
</html>
