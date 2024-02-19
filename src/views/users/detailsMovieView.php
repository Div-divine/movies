<?php get_header('details de films', 'public'); ?>

<div class="mt-5 styling">
    <?php foreach ($FilmDetails as $detail) { ?>
        <?php // format date to d-m-Y 
            $date = new DateTime($detail['dates']);
            $formattedDate = $date->format('d-m-Y');
            ?>
        <div class="description-frame">
            <div class="img-frame">
                <img src="/<?= $detail['poster'] ?>" alt="<?= $detail['title'] ?>">
            </div>
            <div class="description-texts-frame">
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 59.274 90 l -0.773 -0.945 c -6.041 -7.39 -11.586 -15.058 -16.036 -22.174 c -0.292 -0.468 -0.15 -1.082 0.317 -1.375 c 0.468 -0.292 1.083 -0.151 1.375 0.317 c 4.215 6.742 9.427 13.989 15.116 21.019 c 9.204 -11.383 28.62 -37.608 28.62 -56.228 c 0 -15.781 -12.838 -28.62 -28.62 -28.62 c -15.781 0 -28.62 12.839 -28.62 28.62 c 0 2.421 0.342 5.104 1.018 7.973 c 0.127 0.536 -0.206 1.073 -0.742 1.2 c -0.533 0.124 -1.073 -0.206 -1.199 -0.743 c -0.711 -3.019 -1.072 -5.856 -1.072 -8.43 C 28.659 13.734 42.393 0 59.274 0 s 30.615 13.734 30.615 30.615 c 0 19.799 -20.869 47.465 -29.842 58.44 L 59.274 90 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <circle cx="58.778" cy="31.798" r="22.778"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 58.483 49.35 c -4.479 0 -8.958 -1.706 -12.368 -5.115 c -6.819 -6.82 -6.819 -17.916 0 -24.736 l 0 0 c 6.819 -6.82 17.917 -6.82 24.736 0 c 6.82 6.82 6.82 17.916 0 24.736 C 67.442 47.645 62.962 49.35 58.483 49.35 z M 47.526 20.91 c -6.041 6.042 -6.041 15.873 0 21.915 c 6.043 6.042 15.872 6.043 21.915 0 c 6.042 -6.042 6.042 -15.873 0 -21.915 S 53.568 14.868 47.526 20.91 L 47.526 20.91 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 70.851 19.499 c -6.819 -6.82 -17.917 -6.82 -24.736 0 c -6.581 6.582 -6.791 17.135 -0.669 23.995 l -3.244 3.245 c -1.39 -1.004 -3.342 -0.891 -4.592 0.359 l -9.892 9.892 c -0.67 0.67 -1.039 1.564 -1.039 2.516 c 0 0.953 0.369 1.846 1.039 2.516 l 0.611 0.611 c 0.694 0.694 1.605 1.04 2.516 1.04 c 0.911 0 1.822 -0.347 2.516 -1.04 l 9.893 -9.892 c 0.67 -0.67 1.039 -1.564 1.039 -2.516 c 0 -0.76 -0.244 -1.476 -0.678 -2.077 l 3.243 -3.243 c 3.306 2.95 7.46 4.446 11.627 4.446 c 4.479 0 8.958 -1.706 12.368 -5.115 C 77.671 37.415 77.671 26.319 70.851 19.499 z M 41.842 51.331 l -9.892 9.892 c -0.61 0.61 -1.601 0.61 -2.211 0 l -0.611 -0.611 c -0.293 -0.293 -0.455 -0.686 -0.455 -1.106 c 0 -0.419 0.162 -0.812 0.455 -1.106 l 9.892 -9.892 c 0.305 -0.305 0.705 -0.457 1.106 -0.457 s 0.801 0.152 1.106 0.457 l 0.611 0.611 c 0.293 0.293 0.455 0.686 0.455 1.106 C 42.297 50.644 42.135 51.038 41.842 51.331 z M 69.441 42.824 c -6.043 6.043 -15.872 6.042 -21.915 0 c -6.041 -6.042 -6.041 -15.873 0 -21.915 c 6.042 -6.042 15.873 -6.042 21.915 0 S 75.482 36.783 69.441 42.824 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 49.557 34.423 c -0.525 0 -0.965 -0.411 -0.995 -0.942 c -0.175 -3.108 0.985 -6.152 3.185 -8.351 c 2.768 -2.768 6.836 -3.846 10.614 -2.816 c 0.532 0.145 0.846 0.693 0.7 1.225 c -0.145 0.533 -0.698 0.844 -1.225 0.7 c -3.092 -0.844 -6.417 0.039 -8.68 2.302 c -1.798 1.798 -2.747 4.287 -2.604 6.828 c 0.031 0.55 -0.39 1.021 -0.939 1.052 C 49.595 34.422 49.576 34.423 49.557 34.423 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #FFFFFF; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 7.556 83.277 c -0.255 0 -0.51 -0.097 -0.705 -0.292 c -0.39 -0.39 -0.39 -1.021 0 -1.411 l 14.572 -14.572 c 0.39 -0.39 1.021 -0.39 1.411 0 c 0.39 0.39 0.39 1.021 0 1.411 L 8.262 82.985 C 8.067 83.18 7.812 83.277 7.556 83.277 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 24.217 82.639 c -0.255 0 -0.51 -0.097 -0.705 -0.292 c -0.39 -0.39 -0.39 -1.021 0 -1.411 l 12.756 -12.756 c 0.39 -0.39 1.021 -0.39 1.411 0 s 0.39 1.021 0 1.411 L 24.923 82.347 C 24.728 82.542 24.473 82.639 24.217 82.639 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 5.139 85.715 H 4.121 v -1.018 c 0 -0.551 -0.447 -0.998 -0.998 -0.998 s -0.998 0.446 -0.998 0.998 v 1.018 H 1.108 c -0.551 0 -0.998 0.446 -0.998 0.998 c 0 0.551 0.447 0.998 0.998 0.998 h 1.018 v 1.018 c 0 0.551 0.447 0.998 0.998 0.998 s 0.998 -0.446 0.998 -0.998 V 87.71 h 1.018 c 0.551 0 0.998 -0.446 0.998 -0.998 C 6.136 86.161 5.69 85.715 5.139 85.715 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 19.484 89.448 c -0.787 0 -1.575 -0.299 -2.174 -0.899 c -1.199 -1.199 -1.199 -3.149 0 -4.349 c 1.199 -1.201 3.15 -1.2 4.349 0 c 1.199 1.199 1.199 3.149 0 4.349 C 21.06 89.149 20.272 89.448 19.484 89.448 z M 19.484 85.295 c -0.276 0 -0.553 0.105 -0.764 0.316 c -0.421 0.421 -0.421 1.107 0 1.527 c 0.422 0.422 1.106 0.42 1.528 0 c 0.421 -0.421 0.421 -1.107 0 -1.527 C 20.038 85.4 19.761 85.295 19.484 85.295 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 8.592 65.774 c -0.255 0 -0.51 -0.097 -0.705 -0.292 c -0.39 -0.39 -0.39 -1.021 0 -1.411 l 18.302 -18.302 c 0.39 -0.39 1.021 -0.39 1.411 0 c 0.39 0.39 0.39 1.021 0 1.411 L 9.297 65.481 C 9.102 65.676 8.847 65.774 8.592 65.774 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 3.618 72.824 c -0.788 0 -1.575 -0.299 -2.175 -0.899 c -1.199 -1.199 -1.199 -3.15 0 -4.35 c 1.199 -1.201 3.149 -1.201 4.349 0 c 1.199 1.199 1.199 3.15 0 4.35 C 5.193 72.525 4.405 72.824 3.618 72.824 z M 3.618 68.67 c -0.277 0 -0.553 0.105 -0.764 0.316 c -0.421 0.422 -0.421 1.107 0 1.528 c 0.421 0.42 1.105 0.421 1.528 0 c 0.421 -0.422 0.421 -1.107 0 -1.528 C 4.171 68.775 3.894 68.67 3.618 68.67 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,204,29); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Titre du film :
                            <?= ucwords($detail['title']) ?>
                        </p>
                    </div>
                </div>
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <circle cx="45" cy="45" r="45"
                                    style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000000; fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 15.007 37.734 V 70.73 c 0 1.323 1.082 2.405 2.405 2.405 h 49.011 c 1.323 0 2.405 -1.082 2.405 -2.405 V 37.734 H 15.007 z M 31.488 65.961 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 65.961 z M 31.488 52.612 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 52.612 z M 46.506 65.961 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 65.961 z M 46.506 52.612 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 52.612 z M 61.523 52.612 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 52.612 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 66.423 23.551 h -9.355 v -2.652 c 0 -2.529 -2.069 -4.598 -4.598 -4.598 s -4.598 2.069 -4.598 4.598 v 2.652 h -11.91 v -2.652 c 0 -2.529 -2.069 -4.598 -4.598 -4.598 s -4.598 2.069 -4.598 4.598 v 2.652 h -9.355 c -1.323 0 -2.405 1.082 -2.405 2.405 v 7.917 h 53.821 v -7.917 C 68.827 24.633 67.745 23.551 66.423 23.551 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 18.173 34.568 v 32.996 c 0 1.323 1.082 2.405 2.405 2.405 h 49.011 c 1.323 0 2.405 -1.082 2.405 -2.405 V 34.568 H 18.173 z M 34.654 62.795 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 62.795 z M 34.654 49.446 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 49.446 z M 49.672 62.795 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 62.795 z M 49.672 49.446 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 49.446 z M 64.689 49.446 c 0 0.693 -0.567 1.26 -1.26 1.26 h -6.658 c -0.693 0 -1.26 -0.567 -1.26 -1.26 v -6.658 c 0 -0.693 0.567 -1.26 1.26 -1.26 h 6.658 c 0.693 0 1.26 0.567 1.26 1.26 V 49.446 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 69.589 20.385 h -9.355 v -2.652 c 0 -2.529 -2.069 -4.598 -4.598 -4.598 c -2.529 0 -4.598 2.069 -4.598 4.598 v 2.652 h -11.91 v -2.652 c 0 -2.529 -2.069 -4.598 -4.598 -4.598 s -4.598 2.069 -4.598 4.598 v 2.652 h -9.355 c -1.323 0 -2.405 1.082 -2.405 2.405 v 7.917 h 53.821 v -7.917 C 71.993 21.467 70.911 20.385 69.589 20.385 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Date de sortie :
                            <?= $formattedDate ?>
                        </p>
                    </div>
                </div>
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: #FFFFFF; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 26.924 20.117 c 0 6.302 -5.109 11.411 -11.411 11.411 S 4.103 26.419 4.103 20.117 h 0.01 c 0 -4.152 4.298 -8.329 2.227 -14.072 c 2.487 0.804 3.874 2.372 5.153 4.856 c 2.675 -3.94 3.513 -6.899 2.896 -11.402 c 3.621 2.82 5.46 6.645 5.021 11.756 c 0.823 -2.469 2.553 -3.735 4.49 -4.726 c -1.831 6.38 3.013 9.671 3.013 13.588 H 26.924 z"
                                    style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000000; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(2.81 0 0 2.81 1.4065934065934016 1.4065934065934016) "
                                    stroke-linecap="round" />
                                <circle cx="44.997" cy="59.637" r="20.607"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 45 82.244 c -6.039 0 -11.716 -2.352 -15.985 -6.622 c -4.27 -4.27 -6.622 -9.946 -6.622 -15.985 c 0 -6.038 2.352 -11.716 6.622 -15.985 c 8.814 -8.813 23.156 -8.814 31.971 0 l 0 0 c 4.271 4.27 6.622 9.947 6.622 15.985 c 0 6.039 -2.352 11.716 -6.622 15.985 C 56.716 79.893 51.038 82.244 45 82.244 z M 45 41.039 c -4.765 0 -9.53 1.814 -13.157 5.441 c -3.514 3.515 -5.45 8.188 -5.45 13.157 c 0 4.971 1.936 9.643 5.45 13.157 s 8.187 5.45 13.157 5.45 c 4.97 0 9.643 -1.936 13.157 -5.45 s 5.45 -8.187 5.45 -13.157 c 0 -4.97 -1.936 -9.643 -5.45 -13.157 C 54.529 42.853 49.765 41.039 45 41.039 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 53.171 68.122 c -0.44 0 -0.884 -0.145 -1.253 -0.442 l -8.172 -6.579 C 43.274 60.721 43 60.148 43 59.543 V 47.317 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 11.269 l 7.426 5.979 c 0.86 0.692 0.997 1.951 0.304 2.812 C 54.335 67.867 53.755 68.122 53.171 68.122 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(134,140,150); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Durée du film :
                            <?= ConfigureTime($detail['duration']) ?>
                        </p>
                    </div>
                </div>
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 82.805 38.028 v 5.067 H 10.701 v -5.067 H 82.805 M 86.322 34.511 H 7.184 v 12.101 h 79.138 V 34.511 L 86.322 34.511 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="38.3,34.74 27.65,34.74 20.11,46.38 30.76,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="55.75,34.74 45.1,34.74 37.57,46.38 48.22,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="73.39,34.74 62.74,34.74 55.21,46.38 65.86,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="85.84,34.74 80.56,34.74 73.03,46.38 85.73,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="20.63,34.74 10.44,34.74 10.33,46.38 13.09,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 77.074 4.385 l 1.468 4.85 L 9.531 30.125 l -1.468 -4.85 L 77.074 4.385 M 79.422 0 L 3.678 22.928 l 3.506 11.582 l 75.744 -22.928 L 79.422 0 L 79.422 0 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="33.52,14.13 23.33,17.22 19.49,30.55 29.68,27.46 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="50.23,9.08 40.04,12.16 36.2,25.49 46.39,22.4 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="67.11,3.96 56.92,7.05 53.09,20.38 63.28,17.29 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="79.02,0.36 73.97,1.89 70.14,15.22 82.3,11.53 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="16.61,19.25 6.86,22.2 10.13,33.38 12.78,32.58 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 7.184 45 v 43.01 c 0 1.132 0.918 2.05 2.05 2.05 h 75.038 c 1.132 0 2.05 -0.918 2.05 -2.05 V 45 H 7.184 z M 57.608 67.261 l -15.77 9.105 c -0.811 0.468 -1.824 -0.117 -1.824 -1.053 v -18.21 c 0 -0.936 1.013 -1.521 1.824 -1.053 l 15.77 9.105 C 58.419 65.623 58.419 66.793 57.608 67.261 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Catégorie(s) :
                            <?php foreach ($filmCategories as $categorie) {
                                $catToUpper = ucwords($categorie['categorie_name']);
                                $newString = preg_replace('/\s/', ',', $catToUpper); ?>
                                <span>
                                    <?= preg_replace('/\s([A-Z])/', ',$1', $newString) ?>
                                </span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 82.805 38.028 v 5.067 H 10.701 v -5.067 H 82.805 M 86.322 34.511 H 7.184 v 12.101 h 79.138 V 34.511 L 86.322 34.511 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="38.3,34.74 27.65,34.74 20.11,46.38 30.76,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="55.75,34.74 45.1,34.74 37.57,46.38 48.22,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="73.39,34.74 62.74,34.74 55.21,46.38 65.86,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="85.84,34.74 80.56,34.74 73.03,46.38 85.73,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="20.63,34.74 10.44,34.74 10.33,46.38 13.09,46.38 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 77.074 4.385 l 1.468 4.85 L 9.531 30.125 l -1.468 -4.85 L 77.074 4.385 M 79.422 0 L 3.678 22.928 l 3.506 11.582 l 75.744 -22.928 L 79.422 0 L 79.422 0 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="33.52,14.13 23.33,17.22 19.49,30.55 29.68,27.46 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="50.23,9.08 40.04,12.16 36.2,25.49 46.39,22.4 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="67.11,3.96 56.92,7.05 53.09,20.38 63.28,17.29 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="79.02,0.36 73.97,1.89 70.14,15.22 82.3,11.53 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="16.61,19.25 6.86,22.2 10.13,33.38 12.78,32.58 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <path
                                    d="M 7.184 45 v 43.01 c 0 1.132 0.918 2.05 2.05 2.05 h 75.038 c 1.132 0 2.05 -0.918 2.05 -2.05 V 45 H 7.184 z M 57.608 67.261 l -15.77 9.105 c -0.811 0.468 -1.824 -0.117 -1.824 -1.053 v -18.21 c 0 -0.936 1.013 -1.521 1.824 -1.053 l 15.77 9.105 C 58.419 65.623 58.419 66.793 57.608 67.261 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Réalisateur(s) :
                            <?= ucwords($detail['directors']) ?>
                        </p>
                    </div>
                </div>
                <div class="align-icons-text mb-4">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z"
                                    style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #000000; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="37.33,69.32 37.33,69.32 37.33,47.17 37.33,47.17 66.85,33.97 77.93,45.05 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(36,173,21); fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                                <polygon points="37.33,69.32 15.14,47.13 26.22,36.05 37.33,47.17 63.78,20.68 74.86,31.75 "
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform="  matrix(1 0 0 1 0 0) " />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame">
                        <p class="title">Note press : <span class="text">
                                <?= $detail['rating'] ?>
                            </span></p>
                    </div>
                </div>
                <div class="align-icons-text">
                    <div class="align-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            width="42" height="42" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 45 0 C 20.187 0 0 20.187 0 45 c 0 24.813 20.187 45 45 45 c 24.813 0 45 -20.187 45 -45 C 90 20.187 69.813 0 45 0 z M 52.706 67.583 l -0.521 2.194 c -0.227 0.958 -0.938 1.736 -1.878 2.028 c -3.267 1.016 -6.733 1.262 -10.125 0.711 c -2.291 -0.373 -3.846 -2.532 -3.474 -4.823 l 3.067 -18.855 c 0.363 -2.232 -0.817 -4.315 -2.697 -5.247 c -1.175 -0.582 -1.805 -1.885 -1.502 -3.161 l 0.521 -2.194 c 0.227 -0.958 0.938 -1.736 1.878 -2.029 c 3.267 -1.016 6.733 -1.262 10.125 -0.711 c 2.291 0.373 3.846 2.532 3.474 4.823 l -3.067 18.855 c -0.363 2.232 0.817 4.315 2.697 5.247 C 52.379 65.004 53.008 66.307 52.706 67.583 z M 47.55 31.096 c -3.838 0 -6.95 -3.112 -6.95 -6.95 s 3.112 -6.95 6.95 -6.95 s 6.95 3.112 6.95 6.95 S 51.388 31.096 47.55 31.096 z"
                                    style="stroke: #FFFFFF; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #356444; fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-frame synopsis-align">
                        <div class="mb-2">
                            <p class="synopsis-title title">Synopsis :</p>
                        </div>
                        <div>
                            <p class="synopsis-text">
                                <?= $detail['synopsis'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
</div>
<div class="mt-5">
    <p class="star-cast">STARS CASTS</p>
</div>
<div class="mt-5 star-casts-align">
    <?php foreach ($casts as $cast) { ?>
        <div class="align-star mb-4">
            <div class="cast-image-frame">
                <img src="<?= $cast['cast_image'] ?>" alt="<?= $cast['cast_name'] ?>">
            </div>
            <div class="casts-text">
                <p class="">
                    <?= ucwords($cast['cast_name']) ?>
                </p>
                <p class="">Acteur</p>
            </div>
        </div>
    <?php } ?>

</div>
<div class="mt-5 mb-4">
    <p class="star-cast">LES FILMS DE MÊME CATEGORIE(S)</p>
</div>
<div class="style-all">
    <?php
    $displayedTitles = [];
    $valueToRemove = $_GET['slug'];
    foreach ($movie as $cats) {
        foreach ($cats as $cat) {
            $films = getFilms($cat['movies_id']);
            $filmPosterToRemove = removeFilm($valueToRemove);
            $filmPoster = $films['poster'];

            // Check if the title has not been displayed already
            if (!in_array($filmPoster, $displayedTitles)) { 
                ?>  <a href="<?= $router->generate('details', ['slug' => $films['slug']])?>">
                     <div class="mb-3">
                        <img src="/<?= str_replace($filmPosterToRemove['poster'], '',    $filmPoster) ?>" alt="">
                    </div>
                    </a>
                <?php 
                $displayedTitles[] =     $filmPoster;  
            }
        }
    }
    ?>

</div>
<div class="mt-5 mb-4">
    <p class="star-cast">COMMENTAIRES </p>
</div>
<div class="d-flex justify-content-between" style="width:250px">
    <div>
        <p>FILTRER PAR : </p>
    </div>
    <div>
        <form action="" method="post">
            <select name="" id="">
                <option value="">Les plus récents</option>
                <option value="">les plus likés</option>
            </select>

        </form>
    </div>

</div>

<?php get_footer('public'); ?>