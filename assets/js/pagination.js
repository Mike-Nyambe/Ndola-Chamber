// Add your gallery images in an array
const galleryImages = [
  "assets/img/gallery/img-1.jpeg",
  "assets/img/gallery/img-2.jpeg",
  "assets/img/gallery/img-3.jpeg",
  "assets/img/gallery/img-4.jpeg",
  "assets/img/gallery/img-12.jpeg",
  "assets/img/gallery/img-6.jpeg",
  "assets/img/gallery/img-7.jpeg",
  "assets/img/gallery/img-8.jpeg",
  "assets/img/gallery/img-9.jpeg",
  "assets/img/gallery/img-10.jpeg",
  "assets/img/gallery/img-11.jpeg",
  "assets/img/gallery/img-5.jpeg",
  "assets/img/gallery/img-13.jpeg",
  "assets/img/gallery/img-14.jpeg",
  "assets/img/gallery/img-18.jpeg",
  "assets/img/gallery/img-19.jpeg",
  "assets/img/gallery/img-17.jpeg",
  "assets/img/gallery/img-15.jpeg",
  "assets/img/gallery/img-16.jpeg",
  "assets/img/gallery/img-20.jpeg",
  "assets/img/gallery/img-21.jpeg",
  "assets/img/gallery/img-22.jpeg",
  "assets/img/gallery/img-23.jpeg",
  "assets/img/gallery/img-24.jpeg",
  "assets/img/gallery/img-52.jpeg",
  "assets/img/gallery/img-27.jpeg",
  "assets/img/gallery/img-28.jpeg",
  "assets/img/gallery/img-29.jpeg",
  "assets/img/gallery/img-30.jpeg",
  "assets/img/gallery/img-31.jpeg",
  "assets/img/gallery/img-32.jpeg",
  "assets/img/gallery/img-33.jpeg",
  "assets/img/gallery/img-34.jpeg",
  "assets/img/gallery/img-35.jpeg",
  "assets/img/gallery/img-36.jpeg",
  "assets/img/gallery/img-37.jpeg",
  "assets/img/gallery/img-38.jpeg",
  "assets/img/gallery/img-39.jpeg",
  "assets/img/gallery/img-40.jpeg",
  "assets/img/gallery/img-41.jpeg",
  "assets/img/gallery/img-42.jpeg",
  "assets/img/gallery/img-43.jpeg",
  "assets/img/gallery/img-44.jpeg",
  "assets/img/gallery/img-45.jpeg",
  "assets/img/gallery/img-46.jpeg",
  "assets/img/gallery/img-47.jpeg",
  "assets/img/gallery/img-48.jpeg",
  "assets/img/gallery/img-49.jpeg",

  "assets/img/gallery/img-50.jpeg",
  "assets/img/gallery/img-5.jpeg",
  "assets/img/gallery/img-69.jpeg",
  "assets/img/gallery/img-56.jpeg",
  "assets/img/gallery/img-57.jpeg",
  "assets/img/gallery/img-58.jpeg",
  "assets/img/gallery/img-59.jpeg",
  "assets/img/gallery/img-60.jpeg",
  "assets/img/gallery/img-61.jpeg",
  "assets/img/gallery/img-62.jpeg",
  "assets/img/gallery/img-63.jpeg",
  "assets/img/gallery/img-64.jpeg",
  "assets/img/gallery/img-65.jpeg",
  "assets/img/gallery/img-66.jpeg",
  "assets/img/gallery/img-67.jpeg",
  "assets/img/gallery/img-68.jpeg",
  "assets/img/gallery/img-55.jpeg",
  "assets/img/gallery/img-70.jpeg",
  "assets/img/gallery/img-53.jpeg",
  "assets/img/gallery/img-51.jpeg",
  "assets/img/gallery/img-25.jpeg",

  // Add more image URLs here
];

// Function to load more images
const loadMoreImages = () => {
  const galleryContainer = document.querySelector(".gallery .row");
  const loadMoreButton = document.getElementById("loadMoreButton");

  // Number of images to load each time
  const imagesToLoad = 35; // You can change this as needed

  // Calculate the starting index for loading images
  const startIndex = galleryContainer.children.length;

  // Load and append the next set of images
  for (let i = startIndex; i < startIndex + imagesToLoad; i++) {
    if (i >= galleryImages.length) {
      // Hide the "Load More" button when all images are loaded
      loadMoreButton.style.display = "none";
      break;
    }

    const imageSrc = galleryImages[i];
    const imageElement = document.createElement("img");
    imageElement.src = imageSrc;
    imageElement.className = "img-fluid";

    const anchorElement = document.createElement("a");
    anchorElement.href = imageSrc;
    anchorElement.dataset.toggle = "lightbox";
    anchorElement.dataset.gallery = "example-gallery";
    anchorElement.className = "col-sm-4 mb-4";
    anchorElement.appendChild(imageElement);

    galleryContainer.appendChild(anchorElement);
  }
};

// Attach the loadMoreImages function to the "Load More" button click event
const loadMoreButton = document.getElementById("loadMoreButton");
loadMoreButton.addEventListener("click", loadMoreImages);

// Load the initial set of images
loadMoreImages();
