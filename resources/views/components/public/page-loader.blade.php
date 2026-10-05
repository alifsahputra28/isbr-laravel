<div
    id="isbr-page-loader"
    class="isbr-page-loader"
    aria-hidden="true"
>
    {{-- ANIMATED BORDER --}}
    <div class="isbr-page-loader__border"></div>

    {{-- LOGO --}}
    <div class="isbr-page-loader__content">
        <img
            src="{{ asset('assets/images/logo/logo_ibsirun_text.svg') }}"
            alt="Ibnu Sina Batam Run"
            class="isbr-page-loader__logo"
        >
    </div>
</div>

<style>
    /*
    |--------------------------------------------------------------------------
    | ISBR PAGE LOADER
    |--------------------------------------------------------------------------
    */

    .isbr-page-loader {
        position: fixed;
        inset: 0;
        z-index: 99999;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #ffffff;

        opacity: 1;
        visibility: visible;

        transition:
            opacity 1000ms cubic-bezier(.4, 0, .2, 1),
            visibility 1000ms cubic-bezier(.4, 0, .2, 1);
    }


    /*
    |--------------------------------------------------------------------------
    | BORDER
    |--------------------------------------------------------------------------
    */

    .isbr-page-loader__border {
        position: absolute;
        inset: 0;

        overflow: hidden;

        pointer-events: none;
    }


    /*
     * Rotating layer.
     *
     * Layer dibuat jauh lebih besar daripada viewport agar
     * saat diputar tidak meninggalkan sudut kosong.
     */
    .isbr-page-loader__border::before {
        content: '';

        position: absolute;

        top: -100%;
        left: -100%;

        width: 300%;
        height: 300%;

        background:
            conic-gradient(
                from 0deg,

                transparent 0deg,
                transparent 295deg,

                rgba(18, 150, 105, 0.05) 310deg,
                rgba(18, 150, 105, 0.35) 326deg,

                #129669 342deg,
                #129669 354deg,

                transparent 360deg
            );

        animation:
            isbr-loader-border-spin
            2.2s
            linear
            infinite;
    }


    /*
     * Membuat bagian tengah kembali putih,
     * sehingga gradient di atas hanya terlihat di tepian.
     */
    .isbr-page-loader__border::after {
        content: '';

        position: absolute;
        inset: 3px;

        background: #ffffff;

        z-index: 1;
    }


    /*
    |--------------------------------------------------------------------------
    | CONTENT
    |--------------------------------------------------------------------------
    */

    .isbr-page-loader__content {
        position: relative;
        z-index: 10;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 32px;
    }


    .isbr-page-loader__logo {
        display: block;

        width: min(260px, 58vw);
        height: auto;

        object-fit: contain;

        opacity: 0;

        transform:
            translateY(8px)
            scale(.96);

        animation:
            isbr-loader-logo-enter
            700ms
            cubic-bezier(.22, 1, .36, 1)
            100ms
            forwards;

        transition:
            opacity 550ms cubic-bezier(.4, 0, .2, 1),
            transform 550ms cubic-bezier(.4, 0, .2, 1);
    }


    /*
    |--------------------------------------------------------------------------
    | EXIT STATE
    |--------------------------------------------------------------------------
    */

    .isbr-page-loader.is-leaving {
        opacity: 0;
        visibility: hidden;
    }


    .isbr-page-loader.is-leaving
    .isbr-page-loader__logo {
        opacity: 0;

        transform:
            translateY(-4px)
            scale(.985);
    }


    .isbr-page-loader.is-leaving
    .isbr-page-loader__border::before {
        animation-play-state: paused;
    }


    /*
    |--------------------------------------------------------------------------
    | ANIMATIONS
    |--------------------------------------------------------------------------
    */

    @keyframes isbr-loader-border-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    @keyframes isbr-loader-logo-enter {
        from {
            opacity: 0;

            transform:
                translateY(8px)
                scale(.96);
        }

        to {
            opacity: 1;

            transform:
                translateY(0)
                scale(1);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | MOBILE
    |--------------------------------------------------------------------------
    */

    @media (max-width: 640px) {
        .isbr-page-loader__border::after {
            inset: 2px;
        }

        .isbr-page-loader__logo {
            width: min(220px, 62vw);
        }
    }


    /*
    |--------------------------------------------------------------------------
    | ACCESSIBILITY
    |--------------------------------------------------------------------------
    */

    @media (prefers-reduced-motion: reduce) {
        .isbr-page-loader__border::before {
            animation: none;
        }

        .isbr-page-loader__logo {
            opacity: 1;
            transform: none;
            animation: none;
        }

        .isbr-page-loader {
            transition-duration: 250ms;
        }
    }
</style>


<script>
    (() => {
        const loader = document.getElementById('isbr-page-loader');

        if (!loader) {
            return;
        }

        /*
         * Waktu minimum loader tampil.
         *
         * Ini mencegah loader hanya berkedip sebentar
         * ketika halaman sangat cepat dimuat.
         */
        const minimumDuration = 1100;

        const startTime = performance.now();

        const hideLoader = () => {
            const elapsed = performance.now() - startTime;

            const remainingTime = Math.max(
                0,
                minimumDuration - elapsed
            );

            window.setTimeout(() => {
                loader.classList.add('is-leaving');

                /*
                 * Setelah fade selesai,
                 * benar-benar hapus loader dari DOM.
                 */
                window.setTimeout(() => {
                    loader.remove();
                }, 1050);

            }, remainingTime);
        };


        /*
         * Tunggu sampai seluruh halaman:
         * image, CSS, font, dll sudah selesai dimuat.
         */
        if (document.readyState === 'complete') {
            hideLoader();
        } else {
            window.addEventListener(
                'load',
                hideLoader,
                { once: true }
            );
        }


        /*
         * Fallback:
         *
         * Jangan sampai loader terkunci selamanya
         * jika ada resource eksternal yang gagal load.
         */
        window.setTimeout(() => {
            if (
                document.body.contains(loader) &&
                !loader.classList.contains('is-leaving')
            ) {
                loader.classList.add('is-leaving');

                window.setTimeout(() => {
                    loader.remove();
                }, 850);
            }
        }, 8000);
    })();
</script>

<noscript>
    <style>
        #isbr-page-loader {
            display: none !important;
        }
    </style>
</noscript>