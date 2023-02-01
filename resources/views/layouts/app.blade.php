<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="bg-dark">
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">

                    <div class="logo_laravel ">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANsAAADmCAMAAABruQABAAAAilBMVEUAAAD////+/v7t7e3s7Oz09PTw8PD39/f7+/v4+PhjY2O6urq+vr5aWlqxsbHCwsKGhobOzs5ZWVloaGgMDAx+fn5gYGDa2tqNjY3g4OBycnJ4eHiZmZlUVFTJycnT09MVFRU5OTkrKyuhoaEjIyOrq6uKioo7OzstLS1NTU0dHR1FRUUsLCxISEhTQYhBAAAPNklEQVR4nO1dC3vbKg82tsF4aXM5bZbrknRZ2q37zv//ex8S+ALYJLbJYvtMT9cyWmPeAJIQQgpCQYRFglIiSmksSoxAJdTFHCoTKFKoDOHXMT5Ds0rCsZL0raEoyLHFCfyp1RKUkriqJVGMsdLoUl8a6oIt8tWlOzU0bmwEiMWCEiilUIqwMoIih1ICJYaVUIpDKFEoUShxrOxfQwEDSrkgCiUKJY6VPK9MoJQalfhMYjzTq4aCgvcUS9Fcn0nBe+SEgUpkYjA3Yjlh4t41FBRzmNbO4aSYw8ViSPN5X+5SjxoKx40tX5/FUgyr1jQ31nRatablQscVIR8HInklzyvxPYTmlTzCqaQ31LFHQYJEBRUlapQqf11VCYs+3mxWx8UBaDZ7mgh6EjSZIsF/ZVHUiV/Dt8PieFytNrCwEvcrG/aooQwI3ax7Nf8ZtKdf5xVlTWVAfY98ym5y+OgATNLXIy0toL7oJTT61hkZ0M6nXpKLhyTTupV4iOJc684rVUua8EE5Q5+8IBP0uSFeeiSw8TRNuVyPosjlKiwqU70ylZX6M6KSX3xBE7QgHnoEvMQPx516hBYEB+ZHBniR3Uev0IJgE/VFL6HpyTO2X/QO2Oo1U7ulbE1H6dwztCC4kE49KmHDGRBKcwOUOFaGeWVSVOJD0pgBJbBbsJV3aMEJuGHrHkUM/7Kkl6Q3aAGVO8Gtf2zBmXbpkdqbdpbdJL4DtOCV9UEvIet7YAumrA/Y3nuLrZnWXTW7/XNJoAvzYwvK+KQoKa4ElWFeiVwphUrJgPAZxZUYXd4F25S07lFWebN8I3XShO7Mbv37pTG9vFVga9sjf3qJjW0Cqqo0H6DOiiXUZEOjMslLFkO6kB7oXNQSb1PWvKG7YOu8D6jC1ryhCmzd9wFpvgdKoJTk2yFHpfZrWy2ZhI0b4pYgOaete5QVK/fdUd0uFz6/KNZ3uTa2p+YNUUuQ7GnrHkku48MWRF6qsDVsqB7bY/WS/mJTcxLXJ84AXIpyBiCXwZZUZW4NxBmgFvqXmjnZpCEb25q27RHOSeAyHnjJV7NbE+6Bl6x5B16SeLIF0X/MbnmRAXsPMqC77LZsrl5k974Xesl9sK29Y2ujK/+qwta0oVpsbXRlZXEOjDPja6fLoSiFxYl0In7a2Gjjhqqwte6ReCbE825jfbbYCVpz8ql5Q7YMmNPue9PustsaNy+ye94LvcTaVk5aYLM277uHYst05eNiBrQAgsJT3LyhaJU/rho6trAFxVGdLai1pZOgMQNL0oelRUOJ2VDUpUdqvcnPQt8ilM/rshG9Zp2ocnl5cENX5dutktJwC+lBQyP3nelblzxi67wPsP2C+tJQUKXH0CsOgIaKZvr69aShKltQ7myVG0ZD3P4ZlWhMNS2saV7CyqSqoUqrbJuGih7JcbJ8MHTZLV60mZ7Pl/P5vF+v39/n8DVfLncZvQBtgV6+vMAXEJq9v5bo+fn5H6Tn56z4LadSpSo9l5+VNnT5Hd9TvBJpt1wu5/BvPl+v13tJl+mCo/N5vV5CyMKyfgyGlkfKHGdU8XCRAW03VPNVSwry7AHzCHoiJTwl31B+n4O0P0tnUpIBmey+j7vBn6c1tfUSMoZRA7pQAxshPh3pHksLlvnQS1kfbh7dI3/0BqpAyRZkG4cHTBfNFkQXj+6PT3rV9JLUOo8fNE1ICRt9dG/80ldSOn/z7bf6aJLeh7g3ZZNHd8YzLQq9hO4f3RnPNC1kt22xHjhdStjGxSZBY85tQdRyNRg47QtbkH0cP3DaoyYp5dvzozvjmXCjo2S3nytQ/aExY3unhS1ofNhwHwCmy9A61h04zcHLMUVbkO1GMXCaE5Kdv40QW6GX/Pvoznimd4UtHiG2ubIFgeVkfHMSeckoZcCcFrag8WEbr17yF9sw6V3ucXBvOjpsJVvQ+LAVesnYsK1L2MZ00gG0LtmCxocN1xvyybHZgso2hWG7Xti0/49gG53ttWQLGh+23BbER4cN9m8yjqF91XfgdC58sceJTeklY/EJyig7f6u86TNwmkq9BHnJfcKrPI4mHH0MEeHYzrsPLM7jGA7fKVSnDSv0khF5qiGRqPCdScclBC7KL0jeGog+H90fj/SNyAsR2Z2V+PXRPfJGH3Gk+ysTtj49ulNe6Ps5Zpa/MqHT4W+/dwte4YsdEsqSzfn3o3vXgZ4nKSmlUjDuiEWMx+cuYYQfR7/PG3lJqXQ/oLizIm+uRjQ9vn/38rpTevUelSen1I9zRG67u84oWb3/6P7GE72WZsNLDMS39YoS7eqt+363oOOyq8zTseUXJr1i+7k/Usoa3l2HK9azXSepd3dsP9YrIluvxqbdEdNviovJGR86uFae2LUr512wnZaHoqFWOS3SlE3aKpsncjUVRVsl/XV+JFbrV3JasIoYBYwms1bwTuRqSJVWYXBPy5m81FZqCAKQGdHAjXv5bL9CVm3dpiZhC3gFNpgw8CJ5dTkqutR83AQwwTzs+92M0gXEday9u05fg7f9xlqfeBOVxJOGZswCmxBl8UZQjJd6RaElttNuQdI8ym2ODYI9HuY/ghcTW1kvoSjV3iRfNbgMjwVraQTvlF05tzmGYleN5uTrdhGS6rvrqzlqG1viyGkRZhJbyEOCwd71ZBEpD9nk5oORE1cXP63ReaUqZNjt47ZbpGFq94iH/LjOer0NXTktStoIjl5kZZCIWBI/3TZ6J5WGxB6d17CZDNg9hRXCBNj9qrw121JHTguia1o/10fAY4pcMQ3SW+BlsrsCGyc3y+7X3UzwCVsJEJWr95P2p1vqurtuaZHIWlJDDUTGF02vwfOA7XV5SCmzY+qISmAeBpnYyvEUiI1NwhOsRcOG4lCwlqlz7X1exxY5ge0OoZRiek4LVHarepphq8ppwSuxBchaUl6RQSIJqYO1fCYqFYXNS9QruWPcdjMqBsDOaUHqNylb7shpkdRv3D6QtVjRQiLH6H3WyoBTJgPq+OT2oCuIRfySlT0Vi4+DOOIYOrAFMHrHBDdKZt4HwitZyyep0/ZPsUt2b2es2JAVa0FUHtfOfdfOpZck13akyFrsCDawgbBH70cbbLtFBOEszJg6rJJ5NMFGb9htK9ZiRYyCyamPXmNsgnlwQrQeRSoE2HVgNdjynBZXx03BW4u1h88UGSRwu0dpeXIKbFIttrGpt5exve6eGEpTrUeoX69uNOAIbI6cFjcbgT7OK0ojO01iefS+U8V66vWS3BaEI1YZ8cjFPAzS9RLDFnQ7tgAFQ8JzSVmkkWIZa/l5Vb6FEtv2CZLA2Q2FDW1Sbr2kofFOshY7daegyVcxblexJSjHMs2g3JCY4If3htYor9gUPNCKjPRfJKTxjF3FFh6IGcIoxs1ichPzuIJNn93/a9xekIl1y6gUsdpdWrbe6pLkrdatrL/megPTSZ7Twi27XfDOIBhqkmPYx7KnqC4VhejYoh2wIOOTsiFbvnUwln/sV5DYQbPvXpVvkRZakbYesRybQ3Z3Owj42Mdykl2zsOrYUMEB6XjsAiy4hq3VeivT2zkmnDXFBqcgi+5HEEviiGNIfZxP4eSMyuq7wvZxOZ5PWDqZ4Qc7TcWclsSR04J4Onv7EIIhzePDK1vQnoQpZ6hRvyb5RpATvlp7eu2O1+e0IL6wCfotRi8uyze5uWIMXoEyAFNRkM3eimHcmrR9t2UL8npmutX0kpVcDPQclGS3HZy52wtdeolXbL80bFRiY5AstKxzeaRdtS1IqRNeP0ZdV44VNvAdA2xdz6gqaEcdOS38YgsyXoIIzgRzTYRwZvKpXskPXt+3446cFl5kQEEbNTrSj13wFjE1MBLYXqmfuPj8kSkDdNntd9ymGcdAIXCaRFzlr43VOU7i10fOlN33xPaS7WSy+I9K8zhThe0W+0wD+pPYgkQd5JGwrHZsk0hh8xyqLsNWmdMi9YztQlXrhBbOVMskS0VBPMdgWhJXTgvP2H7mWmMUTv89iZrTN3lWDVwm8u1uu3PagjxjQ0f9zC+IhFzodrRwF/DMSWzZrWPrnhXeIEqKoyWi+zzRme+X/WFs3wip8Qtq4aNwjSydS7O9escG8rTSLyiK/Tj7lclcb2ox3EcGAM3lea6RioKm/j9GQ76ZeskdXhi8yE8uw4YThh79jxqGZHHI7ntgC75DOMgStoh51iMzegC2IPh6RHce6fNE2OROrzGx6fuAO70U3DlmGwZ5aaPD/G73LObEkdOC3NfN/Mf3+14fWaaOnBZ3xnZvWlJHTouRYKvWS8aFTd8HDB2b7quWlCkcNrZ5qKExfEOHje3daQsaOjaXXjLsoH/V2MiosOk5LZRywoeOTb/7oMuAYQdrnDttQUPH5tJL/mLrK5nYNFelgQc0nBv7AH1vOuxxWxP9Lq0uu4c9bmunXvIXW1/JxKavt2Fj21fYgsLcFjTsYI3rRLswq+RbZgsaODan7B524o7/EjZ9HzDsCCZrYx+QuQShMw0f9rjtw8wlKM1zWmT77pgOe9z2KN9QBlScv40BW51eMjJscdkWNA5suS2ocCsWvGTYAXv3ROclugwYODanLWjYQW33Tr3kL7a+UhU2eZ8pCYePrXx/ixl702FjOzvPqIaOzaWXDDt+6MWFjQ0713XisgUN2xi0J4btVfJJGL0EBm/IGaFjvFMo+aQt30IyYGvQmV+JY8hbRTrrA71dj9FIhxojO74hjiEdZuD2RUUcQ7ndgSA7KjAPJ0MEN8lCBZXCCxlxDGFIyfBCt38uaPkSfKUtSDnvk9Wwzhh3GFRZi/Jj6yVFdJ57uRTfgb5sKiIYKVtQWS/JIkZFjB73Q3Ck+XZm2iV4bR9As4iARWxAVcLIbPAQRI7crAQdj8fFYnE4iC9BMyD8/iRogj8ngqYT/P9U0ERWYBFLl6KoSvlf4kNAs6zJJ2hfveawWMDLRQ9WK+zPBjGkIU/zuIUmClcsWxhdHNEUg3bIvwTCEjoXpUalvO+GY4++R0UllvBcLGndEG6hQ9kjXD9AtYFQ6mMQu0IHh/klFCsUTo8aGjc2zYc+xDDucbmlXGZURPAte6rEvWso0u8+ZLcGijNjM2axEdK4uGlQGUX5sQ0Ze1MzamBl5Nhqjtu/hqpltzGH7WjGtqSUV7n71FCNXjJKbPb6bNmlHjSk+WJHNZ9SZIUhjzKtG2VouUs9aij8PzFaeFoQUoSeAAAAAElFTkSuQmCC"
                            class="my-with">
                    </div>

                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item px-3 ">
                            <a class="nav-link text-black" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('create') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
