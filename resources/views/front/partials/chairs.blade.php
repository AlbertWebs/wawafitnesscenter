<style>
        /* Basic CSS for the image arrangement */
        .image-gallery {
            display: flex;
            justify-content: space-around; /* Distributes items evenly with space around them */
            align-items: center; /* Vertically aligns items in the center */
            width: 100%; /* Take full width of its parent */
            padding: 10px 0; /* Add some vertical padding */
            box-sizing: border-box; /* Include padding in the element's total width and height */
            flex-wrap: wrap; /* Allow items to wrap to the next line on smaller screens */
        }

        .image-gallery a {
            max-width: 12%; /* Adjust based on how many images and desired spacing */
            height: auto; /* Maintain aspect ratio */
            /* border: 1px solid #ccc;  */
            margin: 5px; /* Optional: spacing between images */
            /* box-shadow: 0 2px 4px rgba(0,0,0,0.1);  */
        }
        .image-gallery a:hover {
                transform: scale(1.05); /* Slight zoom-in */
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Soft shadow effect */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
         .image-gallery{
            display:none;
         }
            .image-gallery a {
                max-width: 20%; /* More images per row on tablets */
            }
        }

        @media (max-width: 480px) {
            .image-gallery a {
                max-width: 30%; /* Fewer images per row on mobile phones */
            }
        }
    </style>
     <div class="container">
         <div class="image-gallery">
            <a href="{{url('/')}}/massage-chairs/3d-massage-chair/electric-full-body-airbag-massage-chair-ww-l21"><img src="{{url('/')}}/uploads/chairs/1.png" alt="Massage Chair 1"></a>
            <a href="{{url('/')}}/massage-chairs/3d-massage-chair/new-intelligent-full-body-airbag-massage-chair-l30a"><img src="{{url('/')}}/uploads/chairs/2.png" alt="Massage Chair 2"></a>
            <a href="{{url('/')}}//massage-chairs/4d-massage-chair/new-design-4d-zero-gravity-massage-chair-l36"><img src="{{url('/')}}/uploads/chairs/3.png" alt="Massage Chair 3"></a>
            <a href="{{url('/')}}//massage-chairs/4d-massage-chair/new-4d-ai-music-zero-gravity-massage-chair-l50"><img src="{{url('/')}}/uploads/chairs/L50massage-chair.png" alt="Massage Chair 4"></a>
            <a href="{{url('/')}}//massage-chairs/4d-massage-chair/new-4d-ai-music-zero-gravity-massage-chair-l50"><img src="{{url('/')}}/uploads/chairs/4.png" alt="Massage Chair 5"></a>
            <a href="{{url('/')}}/massage-chairs/3d-massage-chair/electric-full-body-3d-massage-chair-l26a-max"><img src="{{url('/')}}/uploads/chairs/5.png" alt="Massage Chair 6"></a>
            <a href="{{url('/')}}/massage-chairs/3d-massage-chair/high-performance-sl-track-massage-chair-x10"><img src="{{url('/')}}/uploads/chairs/6.png" alt="Massage Chair 7"></a>
         </div>
     </div>