@extends('layouts.app')

@section('content')
        <style data-vue-ssr-id="3133b3f4:0 05db46da:0 3191d5ad:0 221c5332:0 6149e3a0:0 4371ab04:0 ae7cbfa0:0 c2f6e2a0:0 71725040:0 3aae1958:0 d2deb35c:0 57045bc0:0">
            @font-face {
                font-family: Averta;
                src: url(https://cdna.iconscout.com/fonts/8e13912.eot);
                src: url(https://cdna.iconscout.com/fonts/8e13912.eot?#iefix) format("embedded-opentype"), url(https://cdna.iconscout.com/fonts/8a85d92.woff2) format("woff2"),
                    url(https://cdna.iconscout.com/fonts/a78139b.woff) format("woff"), url(https://cdna.iconscout.com/fonts/0f7beaa.ttf) format("truetype");
                font-weight: 700;
                font-style: normal;
                font-display: swap;
            }
            @font-face {
                font-family: Averta;
                src: url(https://cdna.iconscout.com/fonts/15b9023.eot);
                src: url(https://cdna.iconscout.com/fonts/15b9023.eot?#iefix) format("embedded-opentype"), url(https://cdna.iconscout.com/fonts/6ec7d3b.woff2) format("woff2"),
                    url(https://cdna.iconscout.com/fonts/ec11eb5.woff) format("woff"), url(https://cdna.iconscout.com/fonts/8e14b7a.ttf) format("truetype");
                font-weight: 500;
                font-style: normal;
                font-display: swap;
            }
            @font-face {
                font-family: Averta;
                src: url(https://cdna.iconscout.com/fonts/e6bd552.eot);
                src: url(https://cdna.iconscout.com/fonts/e6bd552.eot?#iefix) format("embedded-opentype"), url(https://cdna.iconscout.com/fonts/ef383a6.woff2) format("woff2"),
                    url(https://cdna.iconscout.com/fonts/c638ae0.woff) format("woff"), url(https://cdna.iconscout.com/fonts/746b93b.ttf) format("truetype");
                font-weight: 400;
                font-style: normal;
                font-display: swap;
            } /*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
            :root {
                --blue: #66f;
                --red: #de524c;
                --yellow: #e7b549;
                --green: #24a8af;
                --white: #fff;
                --gray: #424866;
                --primary: #66f;
                --secondary: #596080;
                --success: #24a8af;
                --info: #55afe7;
                --warning: #e7b549;
                --danger: #de524c;
                --light: #fafafc;
                --dark: #1c2033;
                --body: #1c2033;
                --cyan: #55afe7;
                --breakpoint-xs: 0;
                --breakpoint-sm: 576px;
                --breakpoint-md: 1024px;
                --breakpoint-lg: 1280px;
                --breakpoint-xl: 1400px;
                --breakpoint-xxl: 1800px;
                --font-family-sans-serif: "Averta", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                --font-size-base: 1rem;
                --font-size-lg: 1.125rem;
                --font-size-sm: 0.875rem;
                --font-weight-normal: 400;
                --font-weight-bold: 700;
                --font-weight-base: 400;
                --line-height-base: 1.5rem;
                --h1-font-size: 3rem;
                --h2-font-size: 2.25rem;
                --h3-font-size: 1.5rem;
                --h4-font-size: 1.25rem;
                --h5-font-size: 1rem;
                --h6-font-size: 0.875rem;
                --h1-line-height: 3.625rem;
                --h2-line-height: 2.75rem;
                --h3-line-height: 2rem;
                --h4-line-height: 1.75rem;
                --h5-line-height: 1.5rem;
                --h6-line-height: 1.25rem;
                --display1-size: 6rem;
                --display2-size: 5.5rem;
                --display3-size: 4.5rem;
                --display4-size: 3rem;
                --display1-weight: 300;
                --display2-weight: 300;
                --display3-weight: 300;
                --display4-weight: 700;
                --display-line-height: 1.2;
                --lead-font-size: 1.125rem;
                --lead-font-weight: normal;
                --lead-line-height: 1.5rem;
                --small-font-size: 0.85em;
            }
            *,
            :after,
            :before {
                box-sizing: border-box;
            }
            html {
                font-family: sans-serif;
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                -ms-overflow-style: scrollbar;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }
            article,
            aside,
            dialog,
            figcaption,
            figure,
            footer,
            header,
            hgroup,
            main,
            nav,
            section {
                display: block;
            }
            body {
                margin: 0;
                font-family: Averta, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5rem;
                color: #000;
                text-align: left;
                background-color: #fff;
                -webkit-font-smoothing: antialiased;
            }
            [tabindex="-1"]:focus {
                outline: 0 !important;
            }
            hr {
                box-sizing: initial;
                height: 0;
                overflow: visible;
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }
            p {
                margin-top: 0;
            }
            address,
            p {
                margin-bottom: 1rem;
            }
            address {
                font-style: normal;
                line-height: inherit;
            }
            dl,
            ol,
            ul {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            ol ol,
            ol ul,
            ul ol,
            ul ul {
                margin-bottom: 0;
            }
            dt {
                font-weight: 700;
            }
            dd {
                margin-bottom: 0.5rem;
                margin-left: 0;
            }
            blockquote {
                margin: 0 0 1rem;
            }
            b,
            strong {
                font-weight: bolder;
            }
            small {
                font-size: 80%;
            }
            a {
                color: #66f;
                text-decoration: none;
                background-color: initial;
                -webkit-text-decoration-skip: objects;
                font-weight: 400;
            }
            a.no-hover {
                text-decoration: none !important;
            }
            a:hover {
                color: #2929cc;
                text-decoration: underline;
            }
            code,
            kbd,
            pre,
            samp {
                font-family: monospace, monospace;
                font-size: 1em;
            }
            pre {
                margin-top: 0;
                margin-bottom: 1rem;
                overflow: auto;
                -ms-overflow-style: scrollbar;
            }
            img {
                vertical-align: middle;
                border-style: none;
            }
            svg:not(:root) {
                overflow: hidden;
            }
            table {
                border-collapse: collapse;
            }
            th {
                text-align: inherit;
            }
            label {
                display: inline-block;
                margin-bottom: 0.5rem;
            }
            button {
                border-radius: 0;
            }
            button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }
            button,
            input,
            optgroup,
            select,
            textarea {
                margin: 0;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            button,
            input {
                overflow: visible;
            }
            button,
            select {
                text-transform: none;
            }
            [type="reset"],
            [type="submit"],
            button,
            html [type="button"] {
                -webkit-appearance: button;
            }
            [type="button"]::-moz-focus-inner,
            [type="reset"]::-moz-focus-inner,
            [type="submit"]::-moz-focus-inner,
            button::-moz-focus-inner {
                padding: 0;
                border-style: none;
            }
            input[type="checkbox"],
            input[type="radio"] {
                box-sizing: border-box;
                padding: 0;
            }
            input[type="date"],
            input[type="datetime-local"],
            input[type="month"],
            input[type="time"] {
                -webkit-appearance: listbox;
            }
            textarea {
                overflow: auto;
                resize: vertical;
            }
            fieldset {
                min-width: 0;
                padding: 0;
                margin: 0;
                border: 0;
            }
            legend {
                display: block;
                width: 100%;
                max-width: 100%;
                padding: 0;
                margin-bottom: 0.5rem;
                font-size: 1.5rem;
                line-height: inherit;
                color: inherit;
                white-space: normal;
            }
            [type="number"]::-webkit-inner-spin-button,
            [type="number"]::-webkit-outer-spin-button {
                height: auto;
            }
            [type="search"] {
                outline-offset: -2px;
                -webkit-appearance: none;
            }
            [type="search"]::-webkit-search-cancel-button,
            [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            ::-webkit-file-upload-button {
                font: inherit;
                -webkit-appearance: button;
            }
            template {
                display: none;
            }
            [hidden] {
                display: none !important;
            }
            .h1,
            .h2,
            .h3,
            .h4,
            .h5,
            .h6,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin-bottom: 0.5rem;
                font-family: inherit;
                font-weight: 700;
                line-height: 1.2;
                color: inherit;
            }
            .h1,
            h1 {
                font-size: 3rem;
                line-height: 3.625rem;
            }
            .h1,
            .h2,
            h1,
            h2 {
                letter-spacing: -0.015em;
            }
            .h2,
            h2 {
                font-size: 2.25rem;
                line-height: 2.75rem;
            }
            .h3,
            h3 {
                font-size: 1.5rem;
                line-height: 2rem;
            }
            .h4,
            h4 {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .h5,
            h5 {
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .h6,
            h6 {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            .lead {
                font-size: 1.125rem;
                font-weight: 400;
                line-height: 1.5rem;
            }
            .tiny-title {
                color: #596080;
                font-size: 0.875rem;
                letter-spacing: 0.5px;
            }
            .capital,
            .tiny-title {
                text-transform: uppercase;
                font-weight: 500;
            }
            .capital {
                color: #000;
                font-size: 11px;
                line-height: 1.4;
                letter-spacing: 0.05em;
            }
            .display-4 {
                font-size: 3rem;
                font-weight: 700;
                line-height: 1.2;
            }
            hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid #d8dbeb;
            }
            .font-size-base {
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .font-size-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
            .font-size-sm {
                font-size: 0.875rem;
                line-height: 1.5rem;
            }
            .caption,
            .caption-lg {
                font-size: 0.75rem;
                line-height: 1.125rem;
            }
            .caption {
                font-weight: 500;
            }
            .small,
            small {
                font-size: 0.85em;
                font-weight: 400;
            }
            .mark,
            mark {
                padding: 0.2em;
                background-color: #fcf8e3;
            }
            .list-inline,
            .list-unstyled {
                padding-left: 0;
                list-style: none;
            }
            .list-inline-item {
                display: inline-block;
            }
            .list-inline-item:not(:last-child) {
                margin-right: 0.5rem;
            }
            .help-text {
                display: block;
                font-size: 0.875rem;
                line-height: 1.375rem;
                color: #596080;
            }
            .img-fluid {
                max-width: 100%;
                height: auto;
            }
            .object-fit-cover {
                object-fit: cover;
            }
            .container {
                width: 100%;
                padding-right: 0.75rem;
                padding-left: 0.75rem;
                margin-right: auto;
                margin-left: auto;
            }
            @media (max-width: 1279.98px) {
                .container {
                    padding-right: 1rem;
                    padding-left: 1rem;
                }
            }
            @media (max-width: 1023.98px) {
                .container {
                    padding-right: 1rem;
                    padding-left: 1rem;
                }
            }
            @media (min-width: 1280px) {
                .container {
                    max-width: 1176px;
                }
            }
            @media (min-width: 1400px) {
                .container {
                    max-width: 1344px;
                }
            }
            @media (min-width: 1800px) {
                .container {
                    max-width: 1456px;
                }
            }
            .container-fluid {
                width: 100%;
                padding-right: 0.75rem;
                padding-left: 0.75rem;
                margin-right: auto;
                margin-left: auto;
            }
            @media (max-width: 1279.98px) {
                .container-fluid {
                    padding-right: 1rem;
                    padding-left: 1rem;
                }
            }
            @media (max-width: 1023.98px) {
                .container-fluid {
                    padding-right: 1rem;
                    padding-left: 1rem;
                }
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                margin-right: -0.75rem;
                margin-left: -0.75rem;
            }
            @media (max-width: 1023.98px) {
                .row {
                    margin-right: -0.5rem;
                    margin-left: -0.5rem;
                }
            }
            @media (min-width: 1800px) {
                .row {
                    margin-right: -1rem;
                    margin-left: -1rem;
                }
            }
            .no-gutters {
                margin-right: 0;
                margin-left: 0;
            }
            .no-gutters > .col,
            .no-gutters > [class*="col-"] {
                padding-right: 0;
                padding-left: 0;
            }
            .col,
            .col-1,
            .col-2,
            .col-3,
            .col-4,
            .col-5,
            .col-6,
            .col-7,
            .col-8,
            .col-9,
            .col-10,
            .col-11,
            .col-12,
            .col-auto,
            .col-lg,
            .col-lg-1,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-auto,
            .col-md,
            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-auto,
            .col-sm,
            .col-sm-1,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-auto,
            .col-xl,
            .col-xl-1,
            .col-xl-2,
            .col-xl-3,
            .col-xl-4,
            .col-xl-5,
            .col-xl-6,
            .col-xl-7,
            .col-xl-8,
            .col-xl-9,
            .col-xl-10,
            .col-xl-11,
            .col-xl-12,
            .col-xl-auto,
            .col-xxl,
            .col-xxl-1,
            .col-xxl-2,
            .col-xxl-3,
            .col-xxl-4,
            .col-xxl-5,
            .col-xxl-6,
            .col-xxl-7,
            .col-xxl-8,
            .col-xxl-9,
            .col-xxl-10,
            .col-xxl-11,
            .col-xxl-12,
            .col-xxl-auto {
                position: relative;
                width: 100%;
                min-height: 1px;
                padding-right: 0.75rem;
                padding-left: 0.75rem;
            }
            @media (max-width: 1023.98px) {
                .col,
                .col-1,
                .col-2,
                .col-3,
                .col-4,
                .col-5,
                .col-6,
                .col-7,
                .col-8,
                .col-9,
                .col-10,
                .col-11,
                .col-12,
                .col-auto,
                .col-lg,
                .col-lg-1,
                .col-lg-2,
                .col-lg-3,
                .col-lg-4,
                .col-lg-5,
                .col-lg-6,
                .col-lg-7,
                .col-lg-8,
                .col-lg-9,
                .col-lg-10,
                .col-lg-11,
                .col-lg-12,
                .col-lg-auto,
                .col-md,
                .col-md-1,
                .col-md-2,
                .col-md-3,
                .col-md-4,
                .col-md-5,
                .col-md-6,
                .col-md-7,
                .col-md-8,
                .col-md-9,
                .col-md-10,
                .col-md-11,
                .col-md-12,
                .col-md-auto,
                .col-sm,
                .col-sm-1,
                .col-sm-2,
                .col-sm-3,
                .col-sm-4,
                .col-sm-5,
                .col-sm-6,
                .col-sm-7,
                .col-sm-8,
                .col-sm-9,
                .col-sm-10,
                .col-sm-11,
                .col-sm-12,
                .col-sm-auto,
                .col-xl,
                .col-xl-1,
                .col-xl-2,
                .col-xl-3,
                .col-xl-4,
                .col-xl-5,
                .col-xl-6,
                .col-xl-7,
                .col-xl-8,
                .col-xl-9,
                .col-xl-10,
                .col-xl-11,
                .col-xl-12,
                .col-xl-auto,
                .col-xxl,
                .col-xxl-1,
                .col-xxl-2,
                .col-xxl-3,
                .col-xxl-4,
                .col-xxl-5,
                .col-xxl-6,
                .col-xxl-7,
                .col-xxl-8,
                .col-xxl-9,
                .col-xxl-10,
                .col-xxl-11,
                .col-xxl-12,
                .col-xxl-auto {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
            }
            @media (min-width: 1800px) {
                .col,
                .col-1,
                .col-2,
                .col-3,
                .col-4,
                .col-5,
                .col-6,
                .col-7,
                .col-8,
                .col-9,
                .col-10,
                .col-11,
                .col-12,
                .col-auto,
                .col-lg,
                .col-lg-1,
                .col-lg-2,
                .col-lg-3,
                .col-lg-4,
                .col-lg-5,
                .col-lg-6,
                .col-lg-7,
                .col-lg-8,
                .col-lg-9,
                .col-lg-10,
                .col-lg-11,
                .col-lg-12,
                .col-lg-auto,
                .col-md,
                .col-md-1,
                .col-md-2,
                .col-md-3,
                .col-md-4,
                .col-md-5,
                .col-md-6,
                .col-md-7,
                .col-md-8,
                .col-md-9,
                .col-md-10,
                .col-md-11,
                .col-md-12,
                .col-md-auto,
                .col-sm,
                .col-sm-1,
                .col-sm-2,
                .col-sm-3,
                .col-sm-4,
                .col-sm-5,
                .col-sm-6,
                .col-sm-7,
                .col-sm-8,
                .col-sm-9,
                .col-sm-10,
                .col-sm-11,
                .col-sm-12,
                .col-sm-auto,
                .col-xl,
                .col-xl-1,
                .col-xl-2,
                .col-xl-3,
                .col-xl-4,
                .col-xl-5,
                .col-xl-6,
                .col-xl-7,
                .col-xl-8,
                .col-xl-9,
                .col-xl-10,
                .col-xl-11,
                .col-xl-12,
                .col-xl-auto,
                .col-xxl,
                .col-xxl-1,
                .col-xxl-2,
                .col-xxl-3,
                .col-xxl-4,
                .col-xxl-5,
                .col-xxl-6,
                .col-xxl-7,
                .col-xxl-8,
                .col-xxl-9,
                .col-xxl-10,
                .col-xxl-11,
                .col-xxl-12,
                .col-xxl-auto {
                    padding-right: 1rem;
                    padding-left: 1rem;
                }
            }
            .col {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }
            .col-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: none;
            }
            .col-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }
            .col-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }
            .col-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
            .col-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }
            .col-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }
            .col-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }
            .col-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }
            .col-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }
            .col-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }
            .col-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }
            .col-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .offset-1 {
                margin-left: 8.33333%;
            }
            .offset-2 {
                margin-left: 16.66667%;
            }
            .offset-3 {
                margin-left: 25%;
            }
            .offset-4 {
                margin-left: 33.33333%;
            }
            .offset-5 {
                margin-left: 41.66667%;
            }
            .offset-6 {
                margin-left: 50%;
            }
            .offset-7 {
                margin-left: 58.33333%;
            }
            .offset-8 {
                margin-left: 66.66667%;
            }
            .offset-9 {
                margin-left: 75%;
            }
            .offset-10 {
                margin-left: 83.33333%;
            }
            .offset-11 {
                margin-left: 91.66667%;
            }
            @media (min-width: 576px) {
                .col-sm {
                    flex-basis: 0;
                    flex-grow: 1;
                    max-width: 100%;
                }
                .col-sm-auto {
                    flex: 0 0 auto;
                    width: auto;
                    max-width: none;
                }
                .col-sm-1 {
                    flex: 0 0 8.33333%;
                    max-width: 8.33333%;
                }
                .col-sm-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
                .col-sm-3 {
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                .col-sm-4 {
                    flex: 0 0 33.33333%;
                    max-width: 33.33333%;
                }
                .col-sm-5 {
                    flex: 0 0 41.66667%;
                    max-width: 41.66667%;
                }
                .col-sm-6 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .col-sm-7 {
                    flex: 0 0 58.33333%;
                    max-width: 58.33333%;
                }
                .col-sm-8 {
                    flex: 0 0 66.66667%;
                    max-width: 66.66667%;
                }
                .col-sm-9 {
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .col-sm-10 {
                    flex: 0 0 83.33333%;
                    max-width: 83.33333%;
                }
                .col-sm-11 {
                    flex: 0 0 91.66667%;
                    max-width: 91.66667%;
                }
                .col-sm-12 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .offset-sm-0 {
                    margin-left: 0;
                }
                .offset-sm-1 {
                    margin-left: 8.33333%;
                }
                .offset-sm-2 {
                    margin-left: 16.66667%;
                }
                .offset-sm-3 {
                    margin-left: 25%;
                }
                .offset-sm-4 {
                    margin-left: 33.33333%;
                }
                .offset-sm-5 {
                    margin-left: 41.66667%;
                }
                .offset-sm-6 {
                    margin-left: 50%;
                }
                .offset-sm-7 {
                    margin-left: 58.33333%;
                }
                .offset-sm-8 {
                    margin-left: 66.66667%;
                }
                .offset-sm-9 {
                    margin-left: 75%;
                }
                .offset-sm-10 {
                    margin-left: 83.33333%;
                }
                .offset-sm-11 {
                    margin-left: 91.66667%;
                }
            }
            @media (min-width: 1024px) {
                .col-md {
                    flex-basis: 0;
                    flex-grow: 1;
                    max-width: 100%;
                }
                .col-md-auto {
                    flex: 0 0 auto;
                    width: auto;
                    max-width: none;
                }
                .col-md-1 {
                    flex: 0 0 8.33333%;
                    max-width: 8.33333%;
                }
                .col-md-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
                .col-md-3 {
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                .col-md-4 {
                    flex: 0 0 33.33333%;
                    max-width: 33.33333%;
                }
                .col-md-5 {
                    flex: 0 0 41.66667%;
                    max-width: 41.66667%;
                }
                .col-md-6 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .col-md-7 {
                    flex: 0 0 58.33333%;
                    max-width: 58.33333%;
                }
                .col-md-8 {
                    flex: 0 0 66.66667%;
                    max-width: 66.66667%;
                }
                .col-md-9 {
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .col-md-10 {
                    flex: 0 0 83.33333%;
                    max-width: 83.33333%;
                }
                .col-md-11 {
                    flex: 0 0 91.66667%;
                    max-width: 91.66667%;
                }
                .col-md-12 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .offset-md-0 {
                    margin-left: 0;
                }
                .offset-md-1 {
                    margin-left: 8.33333%;
                }
                .offset-md-2 {
                    margin-left: 16.66667%;
                }
                .offset-md-3 {
                    margin-left: 25%;
                }
                .offset-md-4 {
                    margin-left: 33.33333%;
                }
                .offset-md-5 {
                    margin-left: 41.66667%;
                }
                .offset-md-6 {
                    margin-left: 50%;
                }
                .offset-md-7 {
                    margin-left: 58.33333%;
                }
                .offset-md-8 {
                    margin-left: 66.66667%;
                }
                .offset-md-9 {
                    margin-left: 75%;
                }
                .offset-md-10 {
                    margin-left: 83.33333%;
                }
                .offset-md-11 {
                    margin-left: 91.66667%;
                }
            }
            @media (min-width: 1280px) {
                .col-lg {
                    flex-basis: 0;
                    flex-grow: 1;
                    max-width: 100%;
                }
                .col-lg-auto {
                    flex: 0 0 auto;
                    width: auto;
                    max-width: none;
                }
                .col-lg-1 {
                    flex: 0 0 8.33333%;
                    max-width: 8.33333%;
                }
                .col-lg-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
                .col-lg-3 {
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                .col-lg-4 {
                    flex: 0 0 33.33333%;
                    max-width: 33.33333%;
                }
                .col-lg-5 {
                    flex: 0 0 41.66667%;
                    max-width: 41.66667%;
                }
                .col-lg-6 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .col-lg-7 {
                    flex: 0 0 58.33333%;
                    max-width: 58.33333%;
                }
                .col-lg-8 {
                    flex: 0 0 66.66667%;
                    max-width: 66.66667%;
                }
                .col-lg-9 {
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .col-lg-10 {
                    flex: 0 0 83.33333%;
                    max-width: 83.33333%;
                }
                .col-lg-11 {
                    flex: 0 0 91.66667%;
                    max-width: 91.66667%;
                }
                .col-lg-12 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .offset-lg-0 {
                    margin-left: 0;
                }
                .offset-lg-1 {
                    margin-left: 8.33333%;
                }
                .offset-lg-2 {
                    margin-left: 16.66667%;
                }
                .offset-lg-3 {
                    margin-left: 25%;
                }
                .offset-lg-4 {
                    margin-left: 33.33333%;
                }
                .offset-lg-5 {
                    margin-left: 41.66667%;
                }
                .offset-lg-6 {
                    margin-left: 50%;
                }
                .offset-lg-7 {
                    margin-left: 58.33333%;
                }
                .offset-lg-8 {
                    margin-left: 66.66667%;
                }
                .offset-lg-9 {
                    margin-left: 75%;
                }
                .offset-lg-10 {
                    margin-left: 83.33333%;
                }
                .offset-lg-11 {
                    margin-left: 91.66667%;
                }
            }
            @media (min-width: 1400px) {
                .col-xl {
                    flex-basis: 0;
                    flex-grow: 1;
                    max-width: 100%;
                }
                .col-xl-auto {
                    flex: 0 0 auto;
                    width: auto;
                    max-width: none;
                }
                .col-xl-1 {
                    flex: 0 0 8.33333%;
                    max-width: 8.33333%;
                }
                .col-xl-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
                .col-xl-3 {
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                .col-xl-4 {
                    flex: 0 0 33.33333%;
                    max-width: 33.33333%;
                }
                .col-xl-5 {
                    flex: 0 0 41.66667%;
                    max-width: 41.66667%;
                }
                .col-xl-6 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .col-xl-7 {
                    flex: 0 0 58.33333%;
                    max-width: 58.33333%;
                }
                .col-xl-8 {
                    flex: 0 0 66.66667%;
                    max-width: 66.66667%;
                }
                .col-xl-9 {
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .col-xl-10 {
                    flex: 0 0 83.33333%;
                    max-width: 83.33333%;
                }
                .col-xl-11 {
                    flex: 0 0 91.66667%;
                    max-width: 91.66667%;
                }
                .col-xl-12 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .offset-xl-0 {
                    margin-left: 0;
                }
                .offset-xl-1 {
                    margin-left: 8.33333%;
                }
                .offset-xl-2 {
                    margin-left: 16.66667%;
                }
                .offset-xl-3 {
                    margin-left: 25%;
                }
                .offset-xl-4 {
                    margin-left: 33.33333%;
                }
                .offset-xl-5 {
                    margin-left: 41.66667%;
                }
                .offset-xl-6 {
                    margin-left: 50%;
                }
                .offset-xl-7 {
                    margin-left: 58.33333%;
                }
                .offset-xl-8 {
                    margin-left: 66.66667%;
                }
                .offset-xl-9 {
                    margin-left: 75%;
                }
                .offset-xl-10 {
                    margin-left: 83.33333%;
                }
                .offset-xl-11 {
                    margin-left: 91.66667%;
                }
            }
            @media (min-width: 1800px) {
                .col-xxl {
                    flex-basis: 0;
                    flex-grow: 1;
                    max-width: 100%;
                }
                .col-xxl-auto {
                    flex: 0 0 auto;
                    width: auto;
                    max-width: none;
                }
                .col-xxl-1 {
                    flex: 0 0 8.33333%;
                    max-width: 8.33333%;
                }
                .col-xxl-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
                .col-xxl-3 {
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                .col-xxl-4 {
                    flex: 0 0 33.33333%;
                    max-width: 33.33333%;
                }
                .col-xxl-5 {
                    flex: 0 0 41.66667%;
                    max-width: 41.66667%;
                }
                .col-xxl-6 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                .col-xxl-7 {
                    flex: 0 0 58.33333%;
                    max-width: 58.33333%;
                }
                .col-xxl-8 {
                    flex: 0 0 66.66667%;
                    max-width: 66.66667%;
                }
                .col-xxl-9 {
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                .col-xxl-10 {
                    flex: 0 0 83.33333%;
                    max-width: 83.33333%;
                }
                .col-xxl-11 {
                    flex: 0 0 91.66667%;
                    max-width: 91.66667%;
                }
                .col-xxl-12 {
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                .offset-xxl-0 {
                    margin-left: 0;
                }
                .offset-xxl-1 {
                    margin-left: 8.33333%;
                }
                .offset-xxl-2 {
                    margin-left: 16.66667%;
                }
                .offset-xxl-3 {
                    margin-left: 25%;
                }
                .offset-xxl-4 {
                    margin-left: 33.33333%;
                }
                .offset-xxl-5 {
                    margin-left: 41.66667%;
                }
                .offset-xxl-6 {
                    margin-left: 50%;
                }
                .offset-xxl-7 {
                    margin-left: 58.33333%;
                }
                .offset-xxl-8 {
                    margin-left: 66.66667%;
                }
                .offset-xxl-9 {
                    margin-left: 75%;
                }
                .offset-xxl-10 {
                    margin-left: 83.33333%;
                }
                .offset-xxl-11 {
                    margin-left: 91.66667%;
                }
            }
            .form-control {
                display: block;
                width: 100%;
                padding: 0.563rem 1.188rem;
                font-size: 0.875rem;
                line-height: 1.5rem;
                color: #000;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #d8dbeb;
                border-radius: 8px;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
            .form-control:focus {
                color: #000;
                background-color: #fff;
                border-color: #ccf;
                outline: 0;
                box-shadow: 0 0 0 2px #e6e6ff;
            }
            .form-control::placeholder {
                color: #596080;
                opacity: 1;
            }
            .form-control:disabled,
            .form-control[readonly] {
                background-color: #ebedf5;
                opacity: 1;
            }
            .col-form-label {
                padding-top: calc(0.563rem + 1px);
                padding-bottom: calc(0.563rem + 1px);
                margin-bottom: 0;
                font-size: inherit;
                line-height: 1.5rem;
                color: #000;
                font-weight: 500;
            }
            .form-group > .col-form-label,
            .form-group > .col-form-label-lg,
            .form-group > .col-form-label-sm {
                padding-bottom: 0.25rem;
            }
            .form-control-sm,
            .input-group-sm > .form-control,
            .input-group-sm > .input-group-append > .btn,
            .input-group-sm > .input-group-append > .input-group-text,
            .input-group-sm > .input-group-prepend > .btn,
            .input-group-sm > .input-group-prepend > .input-group-text {
                padding: 0.25rem 0.94rem;
                font-size: 0.875rem;
                line-height: 1.5rem;
                border-radius: 4px;
            }
            .input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]),
            .input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
            .input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
            .input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
            .input-group-sm > select.form-control:not([size]):not([multiple]),
            select.form-control-sm:not([size]):not([multiple]) {
                height: calc(2rem + 2px);
            }
            .form-control-md {
                padding: 0.563rem 1.188rem;
                font-size: 1rem;
                line-height: 1.5rem;
                border-radius: 8px;
            }
            .form-control-lg,
            .input-group-lg > .form-control,
            .input-group-lg > .input-group-append > .btn,
            .input-group-lg > .input-group-append > .input-group-text,
            .input-group-lg > .input-group-prepend > .btn,
            .input-group-lg > .input-group-prepend > .input-group-text {
                padding: 0.75rem 1.44rem;
                font-size: 1.125rem;
                line-height: 1.75rem;
                border-radius: 12px;
            }
            .input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]),
            .input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
            .input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
            .input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
            .input-group-lg > select.form-control:not([size]):not([multiple]),
            select.form-control-lg:not([size]):not([multiple]) {
                height: calc(3.25rem + 2px);
            }
            .form-group {
                margin-bottom: 2rem;
            }
            .form-text {
                display: block;
                margin-top: 0.25rem;
                font-size: 0.875rem;
                line-height: 1.375rem;
            }
            .form-row {
                display: flex;
                flex-wrap: wrap;
                margin-right: -5px;
                margin-left: -5px;
            }
            .form-row > .col,
            .form-row > [class*="col-"] {
                padding-right: 5px;
                padding-left: 5px;
            }
            .invalid-feedback {
                display: none;
                width: 100%;
                margin-top: 0.25rem;
                font-size: 0.85em;
                color: #f0a9a7;
            }
            .invalid-tooltip {
                position: absolute;
                top: 100%;
                z-index: 5;
                display: none;
                max-width: 100%;
                padding: 0.5rem;
                margin-top: 0.1rem;
                font-size: 0.875rem;
                line-height: 1;
                color: #fff;
                background-color: rgba(240, 169, 167, 0.8);
                border-radius: 0.2rem;
            }
            .custom-select.is-invalid,
            .form-control.is-invalid,
            .was-validated .custom-select:invalid,
            .was-validated .form-control:invalid {
                border-color: #de524c;
            }
            .custom-select.is-invalid:focus,
            .form-control.is-invalid:focus,
            .was-validated .custom-select:invalid:focus,
            .was-validated .form-control:invalid:focus {
                border-color: #de524c;
                box-shadow: 0 0 0 2px rgba(222, 82, 76, 0.25);
            }
            .custom-select.is-invalid ~ .invalid-feedback,
            .custom-select.is-invalid ~ .invalid-tooltip,
            .form-control.is-invalid ~ .invalid-feedback,
            .form-control.is-invalid ~ .invalid-tooltip,
            .was-validated .custom-select:invalid ~ .invalid-feedback,
            .was-validated .custom-select:invalid ~ .invalid-tooltip,
            .was-validated .form-control:invalid ~ .invalid-feedback,
            .was-validated .form-control:invalid ~ .invalid-tooltip {
                display: block;
            }
            .form-check-input.is-invalid ~ .form-check-label,
            .was-validated .form-check-input:invalid ~ .form-check-label {
                color: #f0a9a7;
            }
            .form-check-input.is-invalid ~ .invalid-feedback,
            .form-check-input.is-invalid ~ .invalid-tooltip,
            .was-validated .form-check-input:invalid ~ .invalid-feedback,
            .was-validated .form-check-input:invalid ~ .invalid-tooltip {
                display: block;
            }
            .custom-control-input.is-invalid ~ .custom-control-label:before,
            .was-validated .custom-control-input:invalid ~ .custom-control-label:before {
                border-color: #f0a9a7;
                background-color: #fcf2f2;
            }
            .custom-control-input.is-invalid ~ .invalid-feedback,
            .custom-control-input.is-invalid ~ .invalid-tooltip,
            .was-validated .custom-control-input:invalid ~ .invalid-feedback,
            .was-validated .custom-control-input:invalid ~ .invalid-tooltip {
                display: block;
            }
            .custom-control-input.is-invalid:checked ~ .custom-control-label:before,
            .was-validated .custom-control-input:invalid:checked ~ .custom-control-label:before {
                border-color: #f0a9a7;
                background-color: #fcf2f2;
            }
            .custom-control-input.is-invalid:focus ~ .custom-control-label:before,
            .was-validated .custom-control-input:invalid:focus ~ .custom-control-label:before {
                border-color: #f0a9a7;
                box-shadow: 0 0 0 2px rgba(240, 169, 167, 0.25);
            }
            .custom-file-input.is-invalid ~ .custom-file-label,
            .was-validated .custom-file-input:invalid ~ .custom-file-label {
                border-color: #f0a9a7;
            }
            .custom-file-input.is-invalid ~ .custom-file-label:before,
            .was-validated .custom-file-input:invalid ~ .custom-file-label:before {
                border-color: inherit;
            }
            .custom-file-input.is-invalid ~ .invalid-feedback,
            .custom-file-input.is-invalid ~ .invalid-tooltip,
            .was-validated .custom-file-input:invalid ~ .invalid-feedback,
            .was-validated .custom-file-input:invalid ~ .invalid-tooltip {
                display: block;
            }
            .custom-file-input.is-invalid:focus ~ .custom-file-label,
            .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
                box-shadow: 0 0 0 2px rgba(240, 169, 167, 0.25);
            }
            .form-inline {
                display: flex;
                flex-flow: row wrap;
                align-items: center;
            }
            .form-inline .form-check {
                width: 100%;
            }
            @media (min-width: 576px) {
                .form-inline label {
                    justify-content: center;
                }
                .form-inline .form-group,
                .form-inline label {
                    display: flex;
                    align-items: center;
                    margin-bottom: 0;
                }
                .form-inline .form-group {
                    flex: 0 0 auto;
                    flex-flow: row wrap;
                }
                .form-inline .form-control {
                    display: inline-block;
                    width: auto;
                    vertical-align: middle;
                }
                .form-inline .form-control-plaintext {
                    display: inline-block;
                }
                .form-inline .input-group {
                    width: auto;
                }
                .form-inline .form-check {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: auto;
                    padding-left: 0;
                }
                .form-inline .form-check-input {
                    position: relative;
                    margin-top: 0;
                    margin-right: 0.25rem;
                    margin-left: 0;
                }
                .form-inline .custom-control {
                    align-items: center;
                    justify-content: center;
                }
                .form-inline .custom-control-label {
                    margin-bottom: 0;
                }
            }
            .btn {
                display: inline-block;
                font-weight: 500;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.563rem 1.188rem;
                font-size: 1rem;
                line-height: 1.5rem;
                border-radius: 8px;
                transition: all 0.15s ease-in-out;
            }
            .btn :global(.icon) {
                margin-right: 0.25rem;
                line-height: 1;
                display: inline-block;
                vertical-align: bottom;
            }
            .btn.icon {
                padding: 0.563rem;
                width: calc(2px + 2.626rem);
            }
            .btn.icon.icon svg {
                vertical-align: bottom;
            }
            .btn.icon.icon svg [fill-rule="nonzero"] {
                fill: currentColor;
            }
            .btn.btn-icon {
                padding: 0.563rem;
                width: calc(2px + 2.626rem);
                height: calc(2px + 2.626rem);
            }
            .btn:focus,
            .btn:hover {
                text-decoration: none;
            }
            .btn.focus,
            .btn:focus {
                outline: 0;
                box-shadow: 0 0 0 2px #e6e6ff;
            }
            .btn.disabled,
            .btn:disabled {
                opacity: 0.65;
                box-shadow: none;
            }
            .btn:not(:disabled):not(.disabled) {
                cursor: pointer;
            }
            .btn:not(:disabled):not(.disabled).active,
            .btn:not(:disabled):not(.disabled):active {
                background-image: none;
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05);
            }
            .btn:not(:disabled):not(.disabled).active:focus,
            .btn:not(:disabled):not(.disabled):active:focus {
                box-shadow: 0 0 0 2px #e6e6ff, inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05);
            }
            .btn.btn-icon,
            .btn.has-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            .btn.btn-icon svg,
            .btn.has-icon svg {
                line-height: 1;
                width: 1.5rem;
                height: 1.5rem;
            }
            .btn.has-image-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            .btn.has-image-icon img {
                line-height: 1;
                width: 1.5rem;
                height: 1.5rem;
            }
            a.btn.disabled,
            fieldset:disabled a.btn {
                pointer-events: none;
            }
            .btn-primary {
                color: #fff;
                background-color: #66f;
                border-color: #66f;
                box-shadow: none;
            }
            .btn-primary.hover,
            .btn-primary:hover {
                color: #fff;
                background-color: #2929cc;
                border-color: #2929cc;
            }
            .btn-primary.focus,
            .btn-primary:focus {
                box-shadow: none, 0 0 0 2px rgba(102, 102, 255, 0.5);
            }
            .btn-primary.disabled,
            .btn-primary:disabled {
                color: #fff;
                background-color: #66f;
                border-color: #66f;
            }
            .btn-primary:not(:disabled):not(.disabled).active,
            .btn-primary:not(:disabled):not(.disabled):active,
            .show > .btn-primary.dropdown-toggle {
                color: #fff;
                background-color: #009;
                border-color: #009;
            }
            .btn-primary:not(:disabled):not(.disabled).active:focus,
            .btn-primary:not(:disabled):not(.disabled):active:focus,
            .show > .btn-primary.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(102, 102, 255, 0.5);
            }
            .btn-primary svg {
                vertical-align: middle;
            }
            .btn-primary svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-success {
                color: #fff;
                background-color: #24a8af;
                border-color: #24a8af;
                box-shadow: none;
            }
            .btn-success.hover,
            .btn-success:hover {
                color: #fff;
                background-color: #00686e;
                border-color: #00686e;
            }
            .btn-success.focus,
            .btn-success:focus {
                box-shadow: none, 0 0 0 2px rgba(36, 168, 175, 0.5);
            }
            .btn-success.disabled,
            .btn-success:disabled {
                color: #fff;
                background-color: #24a8af;
                border-color: #24a8af;
            }
            .btn-success:not(:disabled):not(.disabled).active,
            .btn-success:not(:disabled):not(.disabled):active,
            .show > .btn-success.dropdown-toggle {
                color: #fff;
                background-color: #00565b;
                border-color: #00565b;
            }
            .btn-success:not(:disabled):not(.disabled).active:focus,
            .btn-success:not(:disabled):not(.disabled):active:focus,
            .show > .btn-success.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(36, 168, 175, 0.5);
            }
            .btn-success svg {
                vertical-align: middle;
            }
            .btn-success svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-warning {
                color: #000;
                background-color: #e7b549;
                border-color: #e7b549;
                box-shadow: none;
            }
            .btn-warning.hover,
            .btn-warning:hover {
                color: #fff;
                background-color: #a85325;
                border-color: #a85325;
            }
            .btn-warning.focus,
            .btn-warning:focus {
                box-shadow: none, 0 0 0 2px rgba(231, 181, 73, 0.5);
            }
            .btn-warning.disabled,
            .btn-warning:disabled {
                color: #000;
                background-color: #e7b549;
                border-color: #e7b549;
            }
            .btn-warning:not(:disabled):not(.disabled).active,
            .btn-warning:not(:disabled):not(.disabled):active,
            .show > .btn-warning.dropdown-toggle {
                color: #fff;
                background-color: #823218;
                border-color: #823218;
            }
            .btn-warning:not(:disabled):not(.disabled).active:focus,
            .btn-warning:not(:disabled):not(.disabled):active:focus,
            .show > .btn-warning.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(231, 181, 73, 0.5);
            }
            .btn-warning svg {
                vertical-align: middle;
            }
            .btn-warning svg [fill-rule="nonzero"] {
                fill: #000;
            }
            .btn-danger {
                color: #fff;
                background-color: #de524c;
                border-color: #de524c;
                box-shadow: none;
            }
            .btn-danger.hover,
            .btn-danger:hover {
                color: #fff;
                background-color: #8c2822;
                border-color: #8c2822;
            }
            .btn-danger.focus,
            .btn-danger:focus {
                box-shadow: none, 0 0 0 2px rgba(222, 82, 76, 0.5);
            }
            .btn-danger.disabled,
            .btn-danger:disabled {
                color: #fff;
                background-color: #de524c;
                border-color: #de524c;
            }
            .btn-danger:not(:disabled):not(.disabled).active,
            .btn-danger:not(:disabled):not(.disabled):active,
            .show > .btn-danger.dropdown-toggle {
                color: #fff;
                background-color: #752522;
                border-color: #752522;
            }
            .btn-danger:not(:disabled):not(.disabled).active:focus,
            .btn-danger:not(:disabled):not(.disabled):active:focus,
            .show > .btn-danger.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(222, 82, 76, 0.5);
            }
            .btn-danger svg {
                vertical-align: middle;
            }
            .btn-danger svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-default {
                color: #000;
                background-color: #fff;
                border-color: #d8dbeb;
                box-shadow: none;
            }
            .btn-default.hover,
            .btn-default:hover {
                color: #000;
                background-color: #ebedf5;
                border-color: #d8dbeb;
            }
            .btn-default.focus,
            .btn-default:focus {
                box-shadow: none, 0 0 0 2px rgba(216, 219, 235, 0.5);
            }
            .btn-default.disabled,
            .btn-default:disabled {
                color: #000;
                background-color: #fff;
                border-color: #d8dbeb;
            }
            .btn-default:not(:disabled):not(.disabled).active,
            .btn-default:not(:disabled):not(.disabled):active,
            .show > .btn-default.dropdown-toggle {
                color: #000;
                background-color: #fff;
                border-color: #b4bad6;
            }
            .btn-default:not(:disabled):not(.disabled).active:focus,
            .btn-default:not(:disabled):not(.disabled):active:focus,
            .show > .btn-default.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(216, 219, 235, 0.5);
            }
            .btn-default svg {
                vertical-align: middle;
            }
            .btn-default svg [fill-rule="nonzero"] {
                fill: #000;
            }
            .btn-secondary {
                color: #fff;
                background-color: #2e334d;
                border-color: #2e334d;
                box-shadow: none;
            }
            .btn-secondary.hover,
            .btn-secondary:hover {
                color: #fff;
                background-color: #1c2033;
                border-color: #1c2033;
            }
            .btn-secondary.focus,
            .btn-secondary:focus {
                box-shadow: none, 0 0 0 2px rgba(46, 51, 77, 0.5);
            }
            .btn-secondary.disabled,
            .btn-secondary:disabled {
                color: #fff;
                background-color: #2e334d;
                border-color: #2e334d;
            }
            .btn-secondary:not(:disabled):not(.disabled).active,
            .btn-secondary:not(:disabled):not(.disabled):active,
            .show > .btn-secondary.dropdown-toggle {
                color: #fff;
                background-color: #000;
                border-color: #000;
            }
            .btn-secondary:not(:disabled):not(.disabled).active:focus,
            .btn-secondary:not(:disabled):not(.disabled):active:focus,
            .show > .btn-secondary.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(46, 51, 77, 0.5);
            }
            .btn-secondary svg {
                vertical-align: middle;
            }
            .btn-secondary svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-facebook {
                color: #fff;
                background-color: #356bc4;
                border-color: transparent;
                box-shadow: none;
            }
            .btn-facebook.hover,
            .btn-facebook:hover {
                color: #fff;
                background-color: #2a559c;
                border-color: transparent;
            }
            .btn-facebook.focus,
            .btn-facebook:focus {
                box-shadow: none, 0 0 0 2px rgba(0, 0, 0, 0.5);
            }
            .btn-facebook.disabled,
            .btn-facebook:disabled,
            .btn-facebook:not(:disabled):not(.disabled).active,
            .btn-facebook:not(:disabled):not(.disabled):active,
            .show > .btn-facebook.dropdown-toggle {
                color: #fff;
                background-color: #356bc4;
                border-color: transparent;
            }
            .btn-facebook:not(:disabled):not(.disabled).active:focus,
            .btn-facebook:not(:disabled):not(.disabled):active:focus,
            .show > .btn-facebook.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(0, 0, 0, 0.5);
            }
            .btn-facebook svg {
                vertical-align: middle;
            }
            .btn-facebook svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-twitter {
                color: #fff;
                background-color: #27aae1;
                border-color: transparent;
                box-shadow: none;
            }
            .btn-twitter.hover,
            .btn-twitter:hover {
                color: #fff;
                background-color: #1a8bbb;
                border-color: transparent;
            }
            .btn-twitter.focus,
            .btn-twitter:focus {
                box-shadow: none, 0 0 0 2px rgba(0, 0, 0, 0.5);
            }
            .btn-twitter.disabled,
            .btn-twitter:disabled,
            .btn-twitter:not(:disabled):not(.disabled).active,
            .btn-twitter:not(:disabled):not(.disabled):active,
            .show > .btn-twitter.dropdown-toggle {
                color: #fff;
                background-color: #27aae1;
                border-color: transparent;
            }
            .btn-twitter:not(:disabled):not(.disabled).active:focus,
            .btn-twitter:not(:disabled):not(.disabled):active:focus,
            .show > .btn-twitter.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(0, 0, 0, 0.5);
            }
            .btn-twitter svg {
                vertical-align: middle;
            }
            .btn-twitter svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .btn-google {
                color: #000;
                background-color: #fff;
                border-color: #e8e8e8;
                box-shadow: none;
            }
            .btn-google.hover,
            .btn-google:hover {
                color: #000;
                background-color: #fafafc;
                border-color: #e8e8e8;
            }
            .btn-google.focus,
            .btn-google:focus {
                box-shadow: none, 0 0 0 2px hsla(0, 0%, 91%, 0.5);
            }
            .btn-google.disabled,
            .btn-google:disabled {
                color: #000;
                background-color: #fff;
                border-color: #e8e8e8;
            }
            .btn-google:not(:disabled):not(.disabled).active,
            .btn-google:not(:disabled):not(.disabled):active,
            .show > .btn-google.dropdown-toggle {
                color: #000;
                background-color: #fafafc;
                border-color: #e8e8e8;
            }
            .btn-google:not(:disabled):not(.disabled).active:focus,
            .btn-google:not(:disabled):not(.disabled):active:focus,
            .show > .btn-google.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px hsla(0, 0%, 91%, 0.5);
            }
            .btn-google svg {
                vertical-align: middle;
            }
            .btn-google svg [fill-rule="nonzero"] {
                fill: #000;
            }
            .btn-outline-primary {
                color: #66f;
                background-color: initial;
                background-image: none;
                border-color: #66f;
            }
            .btn-outline-primary.hover,
            .btn-outline-primary:hover {
                color: #fff;
                background-color: #66f;
            }
            .btn-outline-primary.focus,
            .btn-outline-primary:focus {
                box-shadow: 0 0 0 2px rgba(102, 102, 255, 0.5);
            }
            .btn-outline-primary.disabled,
            .btn-outline-primary:disabled {
                color: #66f;
                background-color: initial;
            }
            .btn-outline-primary:not(:disabled):not(.disabled).active,
            .btn-outline-primary:not(:disabled):not(.disabled):active,
            .show > .btn-outline-primary.dropdown-toggle {
                color: #fff;
                background-color: #66f;
            }
            .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
            .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-primary.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(102, 102, 255, 0.5);
            }
            .btn-outline-secondary {
                color: #596080;
                background-color: initial;
                background-image: none;
                border-color: #596080;
            }
            .btn-outline-secondary.hover,
            .btn-outline-secondary:hover {
                color: #fff;
                background-color: #596080;
            }
            .btn-outline-secondary.focus,
            .btn-outline-secondary:focus {
                box-shadow: 0 0 0 2px rgba(89, 96, 128, 0.5);
            }
            .btn-outline-secondary.disabled,
            .btn-outline-secondary:disabled {
                color: #596080;
                background-color: initial;
            }
            .btn-outline-secondary:not(:disabled):not(.disabled).active,
            .btn-outline-secondary:not(:disabled):not(.disabled):active,
            .show > .btn-outline-secondary.dropdown-toggle {
                color: #fff;
                background-color: #596080;
            }
            .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
            .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-secondary.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(89, 96, 128, 0.5);
            }
            .btn-outline-success {
                color: #24a8af;
                background-color: initial;
                background-image: none;
                border-color: #24a8af;
            }
            .btn-outline-success.hover,
            .btn-outline-success:hover {
                color: #fff;
                background-color: #24a8af;
            }
            .btn-outline-success.focus,
            .btn-outline-success:focus {
                box-shadow: 0 0 0 2px rgba(36, 168, 175, 0.5);
            }
            .btn-outline-success.disabled,
            .btn-outline-success:disabled {
                color: #24a8af;
                background-color: initial;
            }
            .btn-outline-success:not(:disabled):not(.disabled).active,
            .btn-outline-success:not(:disabled):not(.disabled):active,
            .show > .btn-outline-success.dropdown-toggle {
                color: #fff;
                background-color: #24a8af;
            }
            .btn-outline-success:not(:disabled):not(.disabled).active:focus,
            .btn-outline-success:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-success.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(36, 168, 175, 0.5);
            }
            .btn-outline-info {
                color: #55afe7;
                background-color: initial;
                background-image: none;
                border-color: #55afe7;
            }
            .btn-outline-info.hover,
            .btn-outline-info:hover {
                color: #fff;
                background-color: #55afe7;
            }
            .btn-outline-info.focus,
            .btn-outline-info:focus {
                box-shadow: 0 0 0 2px rgba(85, 175, 231, 0.5);
            }
            .btn-outline-info.disabled,
            .btn-outline-info:disabled {
                color: #55afe7;
                background-color: initial;
            }
            .btn-outline-info:not(:disabled):not(.disabled).active,
            .btn-outline-info:not(:disabled):not(.disabled):active,
            .show > .btn-outline-info.dropdown-toggle {
                color: #fff;
                background-color: #55afe7;
            }
            .btn-outline-info:not(:disabled):not(.disabled).active:focus,
            .btn-outline-info:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-info.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(85, 175, 231, 0.5);
            }
            .btn-outline-warning {
                color: #e7b549;
                background-color: initial;
                background-image: none;
                border-color: #e7b549;
            }
            .btn-outline-warning.hover,
            .btn-outline-warning:hover {
                color: #000;
                background-color: #e7b549;
            }
            .btn-outline-warning.focus,
            .btn-outline-warning:focus {
                box-shadow: 0 0 0 2px rgba(231, 181, 73, 0.5);
            }
            .btn-outline-warning.disabled,
            .btn-outline-warning:disabled {
                color: #e7b549;
                background-color: initial;
            }
            .btn-outline-warning:not(:disabled):not(.disabled).active,
            .btn-outline-warning:not(:disabled):not(.disabled):active,
            .show > .btn-outline-warning.dropdown-toggle {
                color: #000;
                background-color: #e7b549;
            }
            .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
            .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-warning.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(231, 181, 73, 0.5);
            }
            .btn-outline-danger {
                color: #de524c;
                background-color: initial;
                background-image: none;
                border-color: #de524c;
            }
            .btn-outline-danger.hover,
            .btn-outline-danger:hover {
                color: #fff;
                background-color: #de524c;
            }
            .btn-outline-danger.focus,
            .btn-outline-danger:focus {
                box-shadow: 0 0 0 2px rgba(222, 82, 76, 0.5);
            }
            .btn-outline-danger.disabled,
            .btn-outline-danger:disabled {
                color: #de524c;
                background-color: initial;
            }
            .btn-outline-danger:not(:disabled):not(.disabled).active,
            .btn-outline-danger:not(:disabled):not(.disabled):active,
            .show > .btn-outline-danger.dropdown-toggle {
                color: #fff;
                background-color: #de524c;
            }
            .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
            .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-danger.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(222, 82, 76, 0.5);
            }
            .btn-outline-light {
                color: #fafafc;
                background-color: initial;
                background-image: none;
                border-color: #fafafc;
            }
            .btn-outline-light.hover,
            .btn-outline-light:hover {
                color: #000;
                background-color: #fafafc;
            }
            .btn-outline-light.focus,
            .btn-outline-light:focus {
                box-shadow: 0 0 0 2px rgba(250, 250, 252, 0.5);
            }
            .btn-outline-light.disabled,
            .btn-outline-light:disabled {
                color: #fafafc;
                background-color: initial;
            }
            .btn-outline-light:not(:disabled):not(.disabled).active,
            .btn-outline-light:not(:disabled):not(.disabled):active,
            .show > .btn-outline-light.dropdown-toggle {
                color: #000;
                background-color: #fafafc;
            }
            .btn-outline-light:not(:disabled):not(.disabled).active:focus,
            .btn-outline-light:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-light.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(250, 250, 252, 0.5);
            }
            .btn-outline-dark {
                color: #1c2033;
                background-color: initial;
                background-image: none;
                border-color: #1c2033;
            }
            .btn-outline-dark.hover,
            .btn-outline-dark:hover {
                color: #fff;
                background-color: #1c2033;
            }
            .btn-outline-dark.focus,
            .btn-outline-dark:focus {
                box-shadow: 0 0 0 2px rgba(28, 32, 51, 0.5);
            }
            .btn-outline-dark.disabled,
            .btn-outline-dark:disabled {
                color: #1c2033;
                background-color: initial;
            }
            .btn-outline-dark:not(:disabled):not(.disabled).active,
            .btn-outline-dark:not(:disabled):not(.disabled):active,
            .show > .btn-outline-dark.dropdown-toggle {
                color: #fff;
                background-color: #1c2033;
            }
            .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
            .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-dark.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(28, 32, 51, 0.5);
            }
            .btn-outline-body {
                color: #1c2033;
                background-color: initial;
                background-image: none;
                border-color: #1c2033;
            }
            .btn-outline-body.hover,
            .btn-outline-body:hover {
                color: #fff;
                background-color: #1c2033;
            }
            .btn-outline-body.focus,
            .btn-outline-body:focus {
                box-shadow: 0 0 0 2px rgba(28, 32, 51, 0.5);
            }
            .btn-outline-body.disabled,
            .btn-outline-body:disabled {
                color: #1c2033;
                background-color: initial;
            }
            .btn-outline-body:not(:disabled):not(.disabled).active,
            .btn-outline-body:not(:disabled):not(.disabled):active,
            .show > .btn-outline-body.dropdown-toggle {
                color: #fff;
                background-color: #1c2033;
            }
            .btn-outline-body:not(:disabled):not(.disabled).active:focus,
            .btn-outline-body:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-body.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(28, 32, 51, 0.5);
            }
            .btn-outline-cyan {
                color: #55afe7;
                background-color: initial;
                background-image: none;
                border-color: #55afe7;
            }
            .btn-outline-cyan.hover,
            .btn-outline-cyan:hover {
                color: #fff;
                background-color: #55afe7;
            }
            .btn-outline-cyan.focus,
            .btn-outline-cyan:focus {
                box-shadow: 0 0 0 2px rgba(85, 175, 231, 0.5);
            }
            .btn-outline-cyan.disabled,
            .btn-outline-cyan:disabled {
                color: #55afe7;
                background-color: initial;
            }
            .btn-outline-cyan:not(:disabled):not(.disabled).active,
            .btn-outline-cyan:not(:disabled):not(.disabled):active,
            .show > .btn-outline-cyan.dropdown-toggle {
                color: #fff;
                background-color: #55afe7;
            }
            .btn-outline-cyan:not(:disabled):not(.disabled).active:focus,
            .btn-outline-cyan:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-cyan.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px rgba(85, 175, 231, 0.5);
            }
            .btn-outline-white {
                color: #fff;
                background-color: initial;
                background-image: none;
                border-color: #fff;
            }
            .btn-outline-white.hover,
            .btn-outline-white:hover {
                color: #000;
                background-color: #fff;
            }
            .btn-outline-white.focus,
            .btn-outline-white:focus {
                box-shadow: 0 0 0 2px hsla(0, 0%, 100%, 0.5);
            }
            .btn-outline-white.disabled,
            .btn-outline-white:disabled {
                color: #fff;
                background-color: initial;
            }
            .btn-outline-white:not(:disabled):not(.disabled).active,
            .btn-outline-white:not(:disabled):not(.disabled):active,
            .show > .btn-outline-white.dropdown-toggle {
                color: #000;
                background-color: #fff;
            }
            .btn-outline-white:not(:disabled):not(.disabled).active:focus,
            .btn-outline-white:not(:disabled):not(.disabled):active:focus,
            .show > .btn-outline-white.dropdown-toggle:focus {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05), 0 0 0 2px hsla(0, 0%, 100%, 0.5);
            }
            .btn-link {
                font-weight: 400;
                color: #66f;
                background-color: initial;
            }
            .btn-link:hover {
                color: #2929cc;
                background-color: initial;
            }
            .btn-link.focus,
            .btn-link:focus,
            .btn-link:hover {
                text-decoration: underline;
                border-color: transparent;
            }
            .btn-link.focus,
            .btn-link:focus {
                box-shadow: none;
            }
            .btn-link.disabled,
            .btn-link:disabled {
                color: #737999;
            }
            .btn-group-lg > .btn,
            .btn-lg {
                padding: 0.75rem 1.44rem;
                font-size: 1.125rem;
                line-height: 1.75rem;
                border-radius: 12px;
                font-weight: 500;
            }
            .btn-group-lg > .btn :global(.icon),
            .btn-lg :global(.icon) {
                margin-right: 0.25rem;
                line-height: 1;
                display: inline-block;
                vertical-align: bottom;
            }
            .btn-group-lg > .icon.btn,
            .btn-lg.icon {
                padding: 0.75rem;
                width: calc(2px + 3.25rem);
            }
            .btn-group-lg > .icon.icon.btn svg,
            .btn-lg.icon.icon svg {
                vertical-align: bottom;
            }
            .btn-group-lg > .icon.icon.btn svg [fill-rule="nonzero"],
            .btn-lg.icon.icon svg [fill-rule="nonzero"] {
                fill: currentColor;
            }
            .btn-group-lg > .btn-icon.btn,
            .btn-lg.btn-icon {
                padding: 0.75rem;
                width: calc(2px + 3.25rem);
                height: calc(2px + 3.25rem);
            }
            .btn-md {
                padding: 0.563rem 1.188rem;
                font-size: 1rem;
                line-height: 1.5rem;
                border-radius: 8px;
            }
            .btn-md :global(.icon) {
                margin-right: 0.25rem;
                line-height: 1;
                display: inline-block;
                vertical-align: bottom;
            }
            .btn-md.icon {
                padding: 0.563rem;
                width: calc(2px + 2.626rem);
            }
            .btn-md.icon.icon svg {
                vertical-align: bottom;
            }
            .btn-md.icon.icon svg [fill-rule="nonzero"] {
                fill: currentColor;
            }
            .btn-md.btn-icon {
                padding: 0.563rem;
                width: calc(2px + 2.626rem);
                height: calc(2px + 2.626rem);
            }
            .btn-group-sm > .btn,
            .btn-sm {
                padding: 0.25rem 0.94rem;
                font-size: 0.875rem;
                line-height: 1.5rem;
                border-radius: 4px;
            }
            .btn-group-sm > .btn :global(.icon),
            .btn-sm :global(.icon) {
                margin-right: 0.25rem;
                line-height: 1;
                display: inline-block;
                vertical-align: bottom;
            }
            .btn-group-sm > .icon.btn,
            .btn-sm.icon {
                padding: 0.25rem;
                width: calc(2px + 2rem);
            }
            .btn-group-sm > .icon.icon.btn svg,
            .btn-sm.icon.icon svg {
                vertical-align: bottom;
            }
            .btn-group-sm > .icon.icon.btn svg [fill-rule="nonzero"],
            .btn-sm.icon.icon svg [fill-rule="nonzero"] {
                fill: currentColor;
            }
            .btn-group-sm > .btn-icon.btn,
            .btn-sm.btn-icon {
                padding: 0.25rem;
                width: calc(2px + 2rem);
                height: calc(2px + 2rem);
            }
            .btn-group-sm > .btn-icon.btn,
            .btn-group-sm > .has-icon.btn,
            .btn-sm.btn-icon,
            .btn-sm.has-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            .btn-group-sm > .btn-icon.btn svg,
            .btn-group-sm > .has-icon.btn svg,
            .btn-sm.btn-icon svg,
            .btn-sm.has-icon svg {
                line-height: 1;
                width: 1.25rem;
                height: 1.25rem;
            }
            .btn-group-sm > .has-image-icon.btn,
            .btn-sm.has-image-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            .btn-group-sm > .has-image-icon.btn img,
            .btn-sm.has-image-icon img {
                line-height: 1;
                width: 1.25rem;
                height: 1.25rem;
            }
            .btn-zero {
                margin: 0;
                text-decoration: none;
                -webkit-appearance: none;
                appearance: none;
                border: none;
                background-color: initial;
                padding: 0;
                cursor: pointer;
                outline: none !important;
            }
            .btn-block {
                display: block;
                width: 100%;
            }
            .btn-rounded {
                border-radius: 50px !important;
            }
            input[type="button"].btn-block,
            input[type="reset"].btn-block,
            input[type="submit"].btn-block {
                width: 100%;
            }
            .btn-custom {
                background: transparent;
                color: #66f;
            }
            .btn-custom:hover {
                color: #66f;
                background-color: #ebedf5;
            }
            .btn-custom.focus,
            .btn-custom:focus {
                background: #ebedf5;
            }
            .fade {
                opacity: 0;
                transition: opacity 0.15s linear;
            }
            .fade.show {
                opacity: 1;
            }
            .collapse {
                display: none;
            }
            .collapse.show {
                display: block;
            }
            tr.collapse.show {
                display: table-row;
            }
            tbody.collapse.show {
                display: table-row-group;
            }
            .collapsing {
                height: 0;
                overflow: hidden;
                transition: height 0.35s ease, max-height 0.35s ease;
            }
            .collapsing,
            .dropdown,
            .dropup {
                position: relative;
            }
            .dropdown-toggle:after {
                display: inline-block;
                width: 6px;
                height: 6px;
                margin-left: 0.45em;
                vertical-align: 0.255em;
                content: "";
                border-right: 2px solid #000;
                border-bottom: 2px solid #000;
                transform: rotate(45deg);
            }
            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                display: none;
                float: left;
                min-width: 7rem;
                padding: 0.25rem;
                margin: 0.25rem 0 0;
                font-size: 0.875rem;
                color: #000;
                text-align: left;
                list-style: none;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ebedf5;
                border-radius: 8px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            .dropdown-item {
                display: block;
                width: 100%;
                padding: 0.25rem 0.75rem;
                clear: both;
                font-weight: 400;
                color: #000;
                text-align: inherit;
                white-space: nowrap;
                background-color: initial;
                border: 0;
                cursor: pointer;
                border-radius: 4px;
            }
            .dropdown-item:focus,
            .dropdown-item:hover {
                color: #fff;
                text-decoration: none;
                background-color: #66f;
            }
            .dropdown-item:focus .icon svg,
            .dropdown-item:hover .icon svg {
                vertical-align: middle;
            }
            .dropdown-item:focus .icon svg [fill-rule="nonzero"],
            .dropdown-item:hover .icon svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .dropdown-item.active,
            .dropdown-item:active {
                color: #000;
                text-decoration: none;
                background-color: #f5f6fa;
            }
            .dropdown-menu.show {
                display: block;
            }
            .btn-group,
            .btn-group-vertical {
                position: relative;
                display: inline-flex;
                vertical-align: middle;
            }
            .btn-group-vertical > .btn,
            .btn-group > .btn {
                position: relative;
                flex: 0 1 auto;
            }
            .btn-group-vertical > .btn:active,
            .btn-group-vertical > .btn:focus,
            .btn-group-vertical > .btn:hover,
            .btn-group > .btn:active,
            .btn-group > .btn:focus,
            .btn-group > .btn:hover {
                z-index: 1;
            }
            .btn-group-vertical > .btn.active,
            .btn-group > .btn.active {
                z-index: 1;
                border-color: transparent;
                color: #fff;
                background: #66f !important;
            }
            .btn-group-vertical .btn + .btn,
            .btn-group-vertical .btn + .btn-group,
            .btn-group-vertical .btn-group + .btn,
            .btn-group-vertical .btn-group + .btn-group,
            .btn-group .btn + .btn,
            .btn-group .btn + .btn-group,
            .btn-group .btn-group + .btn,
            .btn-group .btn-group + .btn-group {
                margin-left: -1px;
            }
            .btn-group > .btn:first-child {
                margin-left: 0;
            }
            .btn-group > .btn-group:not(:last-child) > .btn,
            .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .btn-group > .btn-group:not(:first-child) > .btn,
            .btn-group > .btn:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .btn-group.show .dropdown-toggle {
                box-shadow: inset 0 1px 3px 0 rgba(66, 72, 102, 0.5), 0 1px 0 0 rgba(28, 32, 51, 0.05);
            }
            .btn-group.show .dropdown-toggle.btn-link {
                box-shadow: none;
            }
            .btn-group-toggle > .btn,
            .btn-group-toggle > .btn-group > .btn {
                margin-bottom: 0;
            }
            .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
            .btn-group-toggle > .btn-group > .btn input[type="radio"],
            .btn-group-toggle > .btn input[type="checkbox"],
            .btn-group-toggle > .btn input[type="radio"] {
                position: absolute;
                clip: rect(0, 0, 0, 0);
                pointer-events: none;
            }
            .input-group {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: stretch;
                width: 100%;
            }
            .input-group > .custom-file,
            .input-group > .custom-select,
            .input-group > .form-control {
                position: relative;
                flex: 1 1 auto;
                width: 1%;
                margin-bottom: 0;
            }
            .input-group > .custom-file:focus,
            .input-group > .custom-select:focus,
            .input-group > .form-control:focus {
                z-index: 3;
            }
            .input-group > .custom-file + .custom-file,
            .input-group > .custom-file + .custom-select,
            .input-group > .custom-file + .form-control,
            .input-group > .custom-select + .custom-file,
            .input-group > .custom-select + .custom-select,
            .input-group > .custom-select + .form-control,
            .input-group > .form-control + .custom-file,
            .input-group > .form-control + .custom-select,
            .input-group > .form-control + .form-control {
                margin-left: -1px;
            }
            .input-group > .custom-select:not(:last-child),
            .input-group > .form-control:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .input-group > .custom-select:not(:first-child),
            .input-group > .form-control:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .input-group > .custom-file {
                display: flex;
                align-items: center;
            }
            .input-group > .custom-file:not(:last-child) .custom-file-label,
            .input-group > .custom-file:not(:last-child) .custom-file-label:before {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .input-group > .custom-file:not(:first-child) .custom-file-label,
            .input-group > .custom-file:not(:first-child) .custom-file-label:before {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .input-group-append,
            .input-group-prepend {
                display: flex;
            }
            .input-group-append .btn,
            .input-group-prepend .btn {
                position: relative;
                z-index: 2;
            }
            .input-group-prepend {
                margin-right: -1px;
            }
            .input-group-append {
                margin-left: -1px;
            }
            .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
            .input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
            .input-group > .input-group-append:not(:last-child) > .btn,
            .input-group > .input-group-append:not(:last-child) > .input-group-text,
            .input-group > .input-group-prepend > .btn,
            .input-group > .input-group-prepend > .input-group-text {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .input-group > .input-group-append > .btn,
            .input-group > .input-group-append > .input-group-text,
            .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
            .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
            .input-group > .input-group-prepend:not(:first-child) > .btn,
            .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .custom-control {
                position: relative;
                display: block;
                min-height: 1.5rem;
                padding-left: 1.5rem;
            }
            .custom-control-inline {
                display: inline-flex;
                margin-right: 1rem;
            }
            .custom-control-input {
                position: absolute;
                z-index: -1;
                opacity: 0;
            }
            .custom-control-input:checked ~ .custom-control-label:before {
                color: #66f;
                background-color: linear-gradient(180deg, #fff, #f8faff 97.72%);
                box-shadow: none;
                border-color: #66f;
            }
            .custom-control-input:focus ~ .custom-control-label:before {
                box-shadow: 0 0 0 2px #e6e6ff;
                border-color: #ccf;
            }
            .custom-control-input:active ~ .custom-control-label:before {
                color: #fff;
                background-color: #fff;
                box-shadow: none;
            }
            .custom-control-label {
                margin-bottom: 0;
                cursor: pointer;
            }
            .custom-control-label:before {
                pointer-events: none;
                -webkit-user-select: none;
                user-select: none;
                border: 1px solid #8f95b3;
                background-color: linear-gradient(180deg, #fff, #f8faff 97.72%);
                box-shadow: 0 1px 0 0 rgba(22, 29, 37, 0.05);
            }
            .custom-control-label:after,
            .custom-control-label:before {
                position: absolute;
                top: 0.25rem;
                left: 0;
                display: block;
                width: 1rem;
                height: 1rem;
                content: "";
            }
            .custom-control-label:after {
                background-repeat: no-repeat;
                background-position: 50%;
                background-size: 50% 50%;
            }
            .custom-checkbox .custom-control-label:before {
                border-radius: 4px;
            }
            .custom-checkbox .custom-control-input:checked ~ .custom-control-label:before {
                background-color: linear-gradient(180deg, #fff, #f8faff 97.72%);
            }
            .custom-checkbox .custom-control-input:checked ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2366f' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
            }
            .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label:before {
                background-color: #66f;
                box-shadow: none;
            }
            .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%2366f' d='M0 2h4'/%3E%3C/svg%3E");
            }
            .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label:before,
            .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label:before {
                background-color: rgba(102, 102, 255, 0.5);
            }
            .custom-radio .custom-control-label:before {
                border-radius: 50%;
            }
            .custom-radio .custom-control-input:checked ~ .custom-control-label:before {
                background-color: linear-gradient(180deg, #fff, #f8faff 97.72%);
            }
            .custom-radio .custom-control-input:checked ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%2366f'/%3E%3C/svg%3E");
            }
            .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label:before {
                background-color: rgba(102, 102, 255, 0.5);
            }
            .custom-select-container {
                position: relative;
            }
            .custom-select-container:before {
                content: "";
                position: absolute;
                display: block;
                height: 6px;
                width: 6px;
                border-right: 2px solid #2e334d;
                border-bottom: 2px solid #2e334d;
                transition: 0.22s;
                transform: rotate(45deg);
                right: 1rem;
                top: 50%;
                margin-top: -5px;
                pointer-events: none;
                z-index: 10;
            }
            .custom-select {
                display: inline-block;
                width: 100%;
                height: calc(2.626rem + 2px);
                padding: 0.375rem 1.75rem 0.375rem 0.75rem;
                line-height: 1.5rem;
                color: #000;
                vertical-align: middle;
                background: #fff;
                border: 1px solid #d8dbeb;
                box-shadow: 0 1px 0 0 rgba(28, 32, 51, 0.05);
                text-align: left;
                border-radius: 4px;
                -webkit-appearance: none;
                appearance: none;
            }
            .custom-select:focus {
                border-color: #ccf;
                outline: 0;
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(204, 204, 255, 0.5);
            }
            .custom-select:focus::-ms-value {
                color: #000;
                background-color: #fff;
            }
            .custom-select[multiple],
            .custom-select[size]:not([size="1"]) {
                height: auto;
                padding-right: 0.75rem;
                background-image: none;
            }
            .custom-select.disabled,
            .custom-select:disabled {
                color: #b4bad6;
                background-color: #fafafc;
                opacity: 0.5;
                pointer-events: none;
            }
            .custom-select::-ms-expand {
                opacity: 0;
            }
            .nav {
                display: flex;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }
            .nav-link {
                display: block;
                padding: 0.5rem 1rem;
            }
            .nav-link:focus,
            .nav-link:hover {
                text-decoration: none;
            }
            .nav-link.disabled {
                color: #737999;
            }
            .nav-tabs {
                border-bottom: 1px solid #d8dbeb;
            }
            .nav-tabs .nav-item {
                margin-bottom: -1px;
            }
            .nav-tabs .nav-link {
                color: #596080;
                background-color: #ebedf5;
                border: 1px solid transparent;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }
            .nav-tabs .nav-link:focus,
            .nav-tabs .nav-link:hover {
                color: #1c2033;
                border-color: transparent;
            }
            .nav-tabs .nav-link.disabled {
                color: #737999;
                background-color: initial;
                border-color: transparent;
            }
            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: #1c2033;
                background-color: #fff;
                border-color: transparent;
            }
            .nav-tabs .dropdown-menu {
                margin-top: -1px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .nav-pills .nav-link {
                border-radius: 4px;
            }
            .nav-pills .nav-link.active,
            .nav-pills .show > .nav-link {
                color: #fff;
                background-color: #66f;
            }
            .nav-fill .nav-item {
                flex: 1 1 auto;
                text-align: center;
            }
            .nav-justified .nav-item {
                flex-basis: 0;
                flex-grow: 1;
                text-align: center;
            }
            .tab-content > .tab-pane {
                display: none;
            }
            .tab-content > .active {
                display: block;
            }
            .navbar {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                padding: 1.5rem 0;
            }
            @media (max-width: 1023.98px) {
                .navbar {
                    padding: 8px 0;
                }
            }
            .navbar > .container,
            .navbar > .container-fluid {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
            }
            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: initial;
                border: 0 solid rgba(0, 0, 0, 0.125);
                box-shadow: 0 0 2px 0 rgba(22, 26, 33, 0.1), 0 2px 4px 0 rgba(22, 26, 33, 0.1);
                border-radius: 4px;
            }
            .card > hr {
                margin-right: 0;
                margin-left: 0;
            }
            .card > .list-group:first-child .list-group-item:first-child {
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }
            .card > .list-group:last-child .list-group-item:last-child {
                border-bottom-right-radius: 4px;
                border-bottom-left-radius: 4px;
            }
            .card-body {
                flex: 1 1 auto;
                padding: 1.25rem;
            }
            .card-title {
                margin-bottom: 0.75rem;
            }
            .card-img {
                width: 100%;
                border-radius: 4px;
            }
            .card-img-top {
                width: 100%;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }
            .breadcrumb {
                display: flex;
                flex-wrap: wrap;
                padding: 0;
                margin-bottom: 1rem;
                list-style: none;
                background-color: transparent;
                border-radius: 4px;
            }
            .breadcrumb-item + .breadcrumb-item:before {
                content: "";
                position: absolute;
                display: block;
                height: 7px;
                width: 7px;
                border-right: 2px solid #596080;
                border-bottom: 2px solid #596080;
                transition: 0.22s;
                transform: rotate(-45deg);
                display: inline-block;
                position: static;
                margin-right: 0.5rem;
                margin-left: 0.5rem;
                vertical-align: middle;
            }
            .breadcrumb-item > a {
                color: #596080;
                font-weight: inherit;
            }
            .breadcrumb-item + .breadcrumb-item:hover:before {
                text-decoration: underline;
                text-decoration: none;
            }
            .breadcrumb-item.active {
                color: #000;
            }
            .pagination {
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: 4px;
            }
            .page-link {
                position: relative;
                display: block;
                padding: 0.5rem 0.75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #66f;
                background-color: #fff;
                border: 1px solid #d8dbeb;
            }
            .page-link:hover {
                color: #2929cc;
                text-decoration: none;
                background-color: #ebedf5;
                border-color: #d8dbeb;
            }
            .page-link:focus {
                z-index: 2;
                outline: 0;
                box-shadow: 0 0 0 2px #e6e6ff;
            }
            .page-link:not(:disabled):not(.disabled) {
                cursor: pointer;
            }
            .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }
            .page-item:last-child .page-link {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #66f;
                border-color: #66f;
            }
            .page-item.disabled .page-link {
                color: #737999;
                pointer-events: none;
                cursor: auto;
                background-color: #fff;
                border-color: #d8dbeb;
            }
            .badge {
                display: inline-block;
                padding: 1px 0.25rem;
                font-size: 0.75rem;
                font-weight: 500;
                line-height: 1.125rem;
                text-align: center;
                white-space: nowrap;
                vertical-align: initial;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                border-radius: 8px;
            }
            .btn .badge {
                position: relative;
                top: -1px;
            }
            .badge-pill {
                padding-right: 0.6em;
                padding-left: 0.6em;
                border-radius: 10rem;
            }
            .badge-primary {
                color: #fff;
                background-color: #66f;
            }
            .badge-primary[href]:focus,
            .badge-primary[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #33f;
            }
            .badge-secondary {
                color: #fff;
                background-color: #596080;
            }
            .badge-secondary[href]:focus,
            .badge-secondary[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #444962;
            }
            .badge-success {
                color: #fff;
                background-color: #24a8af;
            }
            .badge-success[href]:focus,
            .badge-success[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #1b7f85;
            }
            .badge-info {
                color: #fff;
                background-color: #55afe7;
            }
            .badge-info[href]:focus,
            .badge-info[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #289ae1;
            }
            .badge-warning {
                color: #000;
                background-color: #e7b549;
            }
            .badge-warning[href]:focus,
            .badge-warning[href]:hover {
                color: #000;
                text-decoration: none;
                background-color: #e0a21d;
            }
            .badge-danger {
                color: #fff;
                background-color: #de524c;
            }
            .badge-danger[href]:focus,
            .badge-danger[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #d12d26;
            }
            .badge-light {
                color: #000;
                background-color: #fafafc;
            }
            .badge-light[href]:focus,
            .badge-light[href]:hover {
                color: #000;
                text-decoration: none;
                background-color: #dadae9;
            }
            .badge-dark {
                color: #fff;
                background-color: #1c2033;
            }
            .badge-dark[href]:focus,
            .badge-dark[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #0a0b12;
            }
            .badge-body {
                color: #fff;
                background-color: #1c2033;
            }
            .badge-body[href]:focus,
            .badge-body[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #0a0b12;
            }
            .badge-cyan {
                color: #fff;
                background-color: #55afe7;
            }
            .badge-cyan[href]:focus,
            .badge-cyan[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #289ae1;
            }
            .badge-black {
                color: #fff;
                background-color: #000;
            }
            .badge-black[href]:focus,
            .badge-black[href]:hover {
                color: #fff;
                text-decoration: none;
                background-color: #000;
            }
            .toast {
                max-width: 1054px;
                overflow: hidden;
                color: #fff;
                background-color: #000;
                background-clip: padding-box;
                -webkit-backdrop-filter: blur(10px);
                backdrop-filter: blur(10px);
                opacity: 0;
                font-size: 18px;
                border-radius: 8px;
            }
            .toast:not(:last-child) {
                margin-bottom: 1.2rem;
            }
            .toast.showing {
                opacity: 1;
            }
            .toast.show {
                display: block;
                opacity: 1;
            }
            .toast.hide {
                display: none;
            }
            .toast-header {
                display: flex;
                align-items: center;
                padding: 0.625rem 1.2rem;
                color: #fff;
                background-color: hsla(0, 0%, 100%, 0.85);
                background-clip: padding-box;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                border-radius: 8px;
                font-size: 18px;
                line-height: 1.625rem;
            }
            .toast-header > strong {
                color: #fff;
                font-weight: 400;
                padding: 4px 0;
            }
            .toast-header .close {
                opacity: 1;
                filter: brightness(0) invert(1);
            }
            .toast-body {
                padding: 0.625rem;
            }
            .media {
                display: flex;
                align-items: flex-start;
            }
            .media-body {
                flex: 1;
            }
            .close {
                float: right;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                opacity: 0.5;
            }
            .close:focus,
            .close:hover {
                color: #000;
                text-decoration: none;
                opacity: 0.75;
            }
            .close:not(:disabled):not(.disabled) {
                cursor: pointer;
            }
            button.close {
                padding: 0;
                background-color: initial;
                border: 0;
                -webkit-appearance: none;
            }
            .modal,
            .modal-open {
                overflow: hidden;
            }
            .modal {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1050;
                display: none;
                outline: 0;
            }
            .modal-open .modal {
                overflow-x: hidden;
                overflow-y: auto;
            }
            .modal-dialog {
                position: relative;
                width: auto;
                margin: 0.5rem;
                pointer-events: none;
            }
            .modal.fade .modal-dialog {
                transition: transform 0.3s ease-out;
                transform: translateY(-25%);
            }
            .modal.scale .modal-dialog {
                transition: transform 0.5s cubic-bezier(0.36, 1, 0.2, 1);
                transform: scale(0.5);
                will-change: transform;
            }
            .modal.show .modal-dialog {
                transform: translate(0) scale(1);
            }
            .modal-dialog-centered {
                display: flex;
                align-items: center;
                min-height: calc(100% - 1rem);
            }
            .modal-content {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 12px;
                box-shadow: 0 0.25rem 0.5rem rgba(28, 32, 51, 0.1);
                overflow: hidden;
                outline: 0;
            }
            .modal-backdrop {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1040;
                background-color: #000;
            }
            .modal-backdrop.fade {
                opacity: 0;
            }
            .modal-backdrop.show {
                opacity: 0.7;
            }
            .modal-header {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
                border-bottom: 1px solid #ebedf5;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }
            .modal-header .close {
                position: absolute;
                top: 24px;
                right: 24px;
                opacity: 1;
                font-size: 1.5rem;
                font-weight: 400;
                outline: none !important;
            }
            .modal-title {
                max-width: 300px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                margin-bottom: 0;
                line-height: 1.5rem;
            }
            .modal-body {
                position: relative;
                flex: 1 1 auto;
                padding: 1rem;
            }
            .modal-footer {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                padding: 1rem;
                border-top: 1px solid #ebedf5;
            }
            .modal-footer > :not(:first-child) {
                margin-left: 0.25rem;
            }
            .modal-footer > :not(:last-child) {
                margin-right: 0.25rem;
            }
            .modal-scrollbar-measure {
                position: absolute;
                top: -9999px;
                width: 50px;
                height: 50px;
                overflow: scroll;
            }
            @media (min-width: 576px) {
                .modal-dialog {
                    max-width: 536px;
                    margin: 1.75rem auto;
                }
                .modal-dialog-centered {
                    min-height: calc(100% - 3.5rem);
                }
                .modal-content {
                    box-shadow: 0 0.8rem 1.25rem 0 rgba(28, 32, 51, 0.1);
                }
                .modal-sm {
                    max-width: 300px;
                }
            }
            @media (min-width: 1280px) {
                .modal-lg {
                    max-width: 800px;
                }
            }
            .align-baseline {
                vertical-align: initial !important;
            }
            .align-text-bottom {
                vertical-align: text-bottom !important;
            }
            .bg-primary {
                background-color: #66f !important;
            }
            a.bg-primary:focus,
            a.bg-primary:hover,
            button.bg-primary:focus,
            button.bg-primary:hover {
                background-color: #33f !important;
            }
            .bg-secondary {
                background-color: #596080 !important;
            }
            a.bg-secondary:focus,
            a.bg-secondary:hover,
            button.bg-secondary:focus,
            button.bg-secondary:hover {
                background-color: #444962 !important;
            }
            .bg-success {
                background-color: #24a8af !important;
            }
            a.bg-success:focus,
            a.bg-success:hover,
            button.bg-success:focus,
            button.bg-success:hover {
                background-color: #1b7f85 !important;
            }
            .bg-info {
                background-color: #55afe7 !important;
            }
            a.bg-info:focus,
            a.bg-info:hover,
            button.bg-info:focus,
            button.bg-info:hover {
                background-color: #289ae1 !important;
            }
            .bg-warning {
                background-color: #e7b549 !important;
            }
            a.bg-warning:focus,
            a.bg-warning:hover,
            button.bg-warning:focus,
            button.bg-warning:hover {
                background-color: #e0a21d !important;
            }
            .bg-danger {
                background-color: #de524c !important;
            }
            a.bg-danger:focus,
            a.bg-danger:hover,
            button.bg-danger:focus,
            button.bg-danger:hover {
                background-color: #d12d26 !important;
            }
            .bg-light {
                background-color: #fafafc !important;
            }
            a.bg-light:focus,
            a.bg-light:hover,
            button.bg-light:focus,
            button.bg-light:hover {
                background-color: #dadae9 !important;
            }
            .bg-dark {
                background-color: #1c2033 !important;
            }
            a.bg-dark:focus,
            a.bg-dark:hover,
            button.bg-dark:focus,
            button.bg-dark:hover {
                background-color: #0a0b12 !important;
            }
            .bg-body {
                background-color: #1c2033 !important;
            }
            a.bg-body:focus,
            a.bg-body:hover,
            button.bg-body:focus,
            button.bg-body:hover {
                background-color: #0a0b12 !important;
            }
            .bg-cyan {
                background-color: #55afe7 !important;
            }
            a.bg-cyan:focus,
            a.bg-cyan:hover,
            button.bg-cyan:focus,
            button.bg-cyan:hover {
                background-color: #289ae1 !important;
            }
            a.bg-white:focus,
            a.bg-white:hover,
            button.bg-white:focus,
            button.bg-white:hover {
                background-color: #e6e6e6 !important;
            }
            .bg-white {
                background-color: #fff !important;
            }
            .bg-black {
                background-color: #000 !important;
            }
            .bg-transparent {
                background-color: initial !important;
            }
            .border {
                border: 1px solid #d8dbeb !important;
            }
            .border-top {
                border-top: 1px solid #d8dbeb !important;
            }
            .border-right {
                border-right: 1px solid #d8dbeb !important;
            }
            .border-bottom {
                border-bottom: 1px solid #d8dbeb !important;
            }
            .border-left {
                border-left: 1px solid #d8dbeb !important;
            }
            .border-0 {
                border: 0 !important;
            }
            .border-top-0 {
                border-top: 0 !important;
            }
            .border-right-0 {
                border-right: 0 !important;
            }
            .border-bottom-0 {
                border-bottom: 0 !important;
            }
            .border-left-0 {
                border-left: 0 !important;
            }
            .border-primary {
                border-color: #66f !important;
            }
            .border-secondary {
                border-color: #596080 !important;
            }
            .border-success {
                border-color: #24a8af !important;
            }
            .border-info {
                border-color: #55afe7 !important;
            }
            .border-warning {
                border-color: #e7b549 !important;
            }
            .border-danger {
                border-color: #de524c !important;
            }
            .border-light {
                border-color: #fafafc !important;
            }
            .border-body,
            .border-dark {
                border-color: #1c2033 !important;
            }
            .border-cyan {
                border-color: #55afe7 !important;
            }
            .border-white {
                border-color: #fff !important;
            }
            .rounded {
                border-radius: 4px !important;
            }
            .rounded-top {
                border-top-left-radius: 4px !important;
            }
            .rounded-right,
            .rounded-top {
                border-top-right-radius: 4px !important;
            }
            .rounded-bottom,
            .rounded-right {
                border-bottom-right-radius: 4px !important;
            }
            .rounded-bottom,
            .rounded-left {
                border-bottom-left-radius: 4px !important;
            }
            .rounded-left {
                border-top-left-radius: 4px !important;
            }
            .rounded-circle {
                border-radius: 50% !important;
            }
            .rounded-0 {
                border-radius: 0 !important;
            }
            .clearfix:after {
                display: block;
                clear: both;
                content: "";
            }
            .d-none {
                display: none !important;
            }
            .d-inline {
                display: inline !important;
            }
            .d-inline-block {
                display: inline-block !important;
            }
            .d-block {
                display: block !important;
            }
            .d-table {
                display: table !important;
            }
            .d-table-row {
                display: table-row !important;
            }
            .d-table-cell {
                display: table-cell !important;
            }
            .d-flex {
                display: flex !important;
            }
            .d-inline-flex {
                display: inline-flex !important;
            }
            @media (min-width: 576px) {
                .d-sm-none {
                    display: none !important;
                }
                .d-sm-inline {
                    display: inline !important;
                }
                .d-sm-inline-block {
                    display: inline-block !important;
                }
                .d-sm-block {
                    display: block !important;
                }
                .d-sm-table {
                    display: table !important;
                }
                .d-sm-table-row {
                    display: table-row !important;
                }
                .d-sm-table-cell {
                    display: table-cell !important;
                }
                .d-sm-flex {
                    display: flex !important;
                }
                .d-sm-inline-flex {
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1024px) {
                .d-md-none {
                    display: none !important;
                }
                .d-md-inline {
                    display: inline !important;
                }
                .d-md-inline-block {
                    display: inline-block !important;
                }
                .d-md-block {
                    display: block !important;
                }
                .d-md-table {
                    display: table !important;
                }
                .d-md-table-row {
                    display: table-row !important;
                }
                .d-md-table-cell {
                    display: table-cell !important;
                }
                .d-md-flex {
                    display: flex !important;
                }
                .d-md-inline-flex {
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1280px) {
                .d-lg-none {
                    display: none !important;
                }
                .d-lg-inline {
                    display: inline !important;
                }
                .d-lg-inline-block {
                    display: inline-block !important;
                }
                .d-lg-block {
                    display: block !important;
                }
                .d-lg-table {
                    display: table !important;
                }
                .d-lg-table-row {
                    display: table-row !important;
                }
                .d-lg-table-cell {
                    display: table-cell !important;
                }
                .d-lg-flex {
                    display: flex !important;
                }
                .d-lg-inline-flex {
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1400px) {
                .d-xl-none {
                    display: none !important;
                }
                .d-xl-inline {
                    display: inline !important;
                }
                .d-xl-inline-block {
                    display: inline-block !important;
                }
                .d-xl-block {
                    display: block !important;
                }
                .d-xl-table {
                    display: table !important;
                }
                .d-xl-table-row {
                    display: table-row !important;
                }
                .d-xl-table-cell {
                    display: table-cell !important;
                }
                .d-xl-flex {
                    display: flex !important;
                }
                .d-xl-inline-flex {
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1800px) {
                .d-xxl-none {
                    display: none !important;
                }
                .d-xxl-inline {
                    display: inline !important;
                }
                .d-xxl-inline-block {
                    display: inline-block !important;
                }
                .d-xxl-block {
                    display: block !important;
                }
                .d-xxl-table {
                    display: table !important;
                }
                .d-xxl-table-row {
                    display: table-row !important;
                }
                .d-xxl-table-cell {
                    display: table-cell !important;
                }
                .d-xxl-flex {
                    display: flex !important;
                }
                .d-xxl-inline-flex {
                    display: inline-flex !important;
                }
            }
            .embed-responsive {
                position: relative;
                display: block;
                width: 100%;
                padding: 0;
                overflow: hidden;
            }
            .embed-responsive:before {
                display: block;
                content: "";
            }
            .embed-responsive .embed-responsive-item,
            .embed-responsive embed,
            .embed-responsive iframe,
            .embed-responsive object,
            .embed-responsive video {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
            .embed-responsive-16by9:before {
                padding-top: 56.25%;
            }
            .flex-row {
                flex-direction: row !important;
            }
            .flex-column {
                flex-direction: column !important;
            }
            .flex-row-reverse {
                flex-direction: row-reverse !important;
            }
            .flex-column-reverse {
                flex-direction: column-reverse !important;
            }
            .flex-wrap {
                flex-wrap: wrap !important;
            }
            .flex-nowrap {
                flex-wrap: nowrap !important;
            }
            .flex-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }
            .justify-content-start {
                justify-content: flex-start !important;
            }
            .justify-content-end {
                justify-content: flex-end !important;
            }
            .justify-content-center {
                justify-content: center !important;
            }
            .justify-content-between {
                justify-content: space-between !important;
            }
            .justify-content-around {
                justify-content: space-around !important;
            }
            .align-items-start {
                align-items: flex-start !important;
            }
            .align-items-end {
                align-items: flex-end !important;
            }
            .align-items-center {
                align-items: center !important;
            }
            .align-content-start {
                align-content: flex-start !important;
            }
            .align-content-end {
                align-content: flex-end !important;
            }
            .align-content-center {
                align-content: center !important;
            }
            .align-content-between {
                align-content: space-between !important;
            }
            .align-content-around {
                align-content: space-around !important;
            }
            .align-self-auto {
                align-self: auto !important;
            }
            .align-self-start {
                align-self: flex-start !important;
            }
            .align-self-end {
                align-self: flex-end !important;
            }
            .align-self-center {
                align-self: center !important;
            }
            @media (min-width: 576px) {
                .flex-sm-row {
                    flex-direction: row !important;
                }
                .flex-sm-column {
                    flex-direction: column !important;
                }
                .flex-sm-row-reverse {
                    flex-direction: row-reverse !important;
                }
                .flex-sm-column-reverse {
                    flex-direction: column-reverse !important;
                }
                .flex-sm-wrap {
                    flex-wrap: wrap !important;
                }
                .flex-sm-nowrap {
                    flex-wrap: nowrap !important;
                }
                .flex-sm-wrap-reverse {
                    flex-wrap: wrap-reverse !important;
                }
                .justify-content-sm-start {
                    justify-content: flex-start !important;
                }
                .justify-content-sm-end {
                    justify-content: flex-end !important;
                }
                .justify-content-sm-center {
                    justify-content: center !important;
                }
                .justify-content-sm-between {
                    justify-content: space-between !important;
                }
                .justify-content-sm-around {
                    justify-content: space-around !important;
                }
                .align-items-sm-start {
                    align-items: flex-start !important;
                }
                .align-items-sm-end {
                    align-items: flex-end !important;
                }
                .align-items-sm-center {
                    align-items: center !important;
                }
                .align-content-sm-start {
                    align-content: flex-start !important;
                }
                .align-content-sm-end {
                    align-content: flex-end !important;
                }
                .align-content-sm-center {
                    align-content: center !important;
                }
                .align-content-sm-between {
                    align-content: space-between !important;
                }
                .align-content-sm-around {
                    align-content: space-around !important;
                }
                .align-self-sm-auto {
                    align-self: auto !important;
                }
                .align-self-sm-start {
                    align-self: flex-start !important;
                }
                .align-self-sm-end {
                    align-self: flex-end !important;
                }
                .align-self-sm-center {
                    align-self: center !important;
                }
            }
            @media (min-width: 1024px) {
                .flex-md-row {
                    flex-direction: row !important;
                }
                .flex-md-column {
                    flex-direction: column !important;
                }
                .flex-md-row-reverse {
                    flex-direction: row-reverse !important;
                }
                .flex-md-column-reverse {
                    flex-direction: column-reverse !important;
                }
                .flex-md-wrap {
                    flex-wrap: wrap !important;
                }
                .flex-md-nowrap {
                    flex-wrap: nowrap !important;
                }
                .flex-md-wrap-reverse {
                    flex-wrap: wrap-reverse !important;
                }
                .justify-content-md-start {
                    justify-content: flex-start !important;
                }
                .justify-content-md-end {
                    justify-content: flex-end !important;
                }
                .justify-content-md-center {
                    justify-content: center !important;
                }
                .justify-content-md-between {
                    justify-content: space-between !important;
                }
                .justify-content-md-around {
                    justify-content: space-around !important;
                }
                .align-items-md-start {
                    align-items: flex-start !important;
                }
                .align-items-md-end {
                    align-items: flex-end !important;
                }
                .align-items-md-center {
                    align-items: center !important;
                }
                .align-content-md-start {
                    align-content: flex-start !important;
                }
                .align-content-md-end {
                    align-content: flex-end !important;
                }
                .align-content-md-center {
                    align-content: center !important;
                }
                .align-content-md-between {
                    align-content: space-between !important;
                }
                .align-content-md-around {
                    align-content: space-around !important;
                }
                .align-self-md-auto {
                    align-self: auto !important;
                }
                .align-self-md-start {
                    align-self: flex-start !important;
                }
                .align-self-md-end {
                    align-self: flex-end !important;
                }
                .align-self-md-center {
                    align-self: center !important;
                }
            }
            @media (min-width: 1280px) {
                .flex-lg-row {
                    flex-direction: row !important;
                }
                .flex-lg-column {
                    flex-direction: column !important;
                }
                .flex-lg-row-reverse {
                    flex-direction: row-reverse !important;
                }
                .flex-lg-column-reverse {
                    flex-direction: column-reverse !important;
                }
                .flex-lg-wrap {
                    flex-wrap: wrap !important;
                }
                .flex-lg-nowrap {
                    flex-wrap: nowrap !important;
                }
                .flex-lg-wrap-reverse {
                    flex-wrap: wrap-reverse !important;
                }
                .justify-content-lg-start {
                    justify-content: flex-start !important;
                }
                .justify-content-lg-end {
                    justify-content: flex-end !important;
                }
                .justify-content-lg-center {
                    justify-content: center !important;
                }
                .justify-content-lg-between {
                    justify-content: space-between !important;
                }
                .justify-content-lg-around {
                    justify-content: space-around !important;
                }
                .align-items-lg-start {
                    align-items: flex-start !important;
                }
                .align-items-lg-end {
                    align-items: flex-end !important;
                }
                .align-items-lg-center {
                    align-items: center !important;
                }
                .align-content-lg-start {
                    align-content: flex-start !important;
                }
                .align-content-lg-end {
                    align-content: flex-end !important;
                }
                .align-content-lg-center {
                    align-content: center !important;
                }
                .align-content-lg-between {
                    align-content: space-between !important;
                }
                .align-content-lg-around {
                    align-content: space-around !important;
                }
                .align-self-lg-auto {
                    align-self: auto !important;
                }
                .align-self-lg-start {
                    align-self: flex-start !important;
                }
                .align-self-lg-end {
                    align-self: flex-end !important;
                }
                .align-self-lg-center {
                    align-self: center !important;
                }
            }
            @media (min-width: 1400px) {
                .flex-xl-row {
                    flex-direction: row !important;
                }
                .flex-xl-column {
                    flex-direction: column !important;
                }
                .flex-xl-row-reverse {
                    flex-direction: row-reverse !important;
                }
                .flex-xl-column-reverse {
                    flex-direction: column-reverse !important;
                }
                .flex-xl-wrap {
                    flex-wrap: wrap !important;
                }
                .flex-xl-nowrap {
                    flex-wrap: nowrap !important;
                }
                .flex-xl-wrap-reverse {
                    flex-wrap: wrap-reverse !important;
                }
                .justify-content-xl-start {
                    justify-content: flex-start !important;
                }
                .justify-content-xl-end {
                    justify-content: flex-end !important;
                }
                .justify-content-xl-center {
                    justify-content: center !important;
                }
                .justify-content-xl-between {
                    justify-content: space-between !important;
                }
                .justify-content-xl-around {
                    justify-content: space-around !important;
                }
                .align-items-xl-start {
                    align-items: flex-start !important;
                }
                .align-items-xl-end {
                    align-items: flex-end !important;
                }
                .align-items-xl-center {
                    align-items: center !important;
                }
                .align-content-xl-start {
                    align-content: flex-start !important;
                }
                .align-content-xl-end {
                    align-content: flex-end !important;
                }
                .align-content-xl-center {
                    align-content: center !important;
                }
                .align-content-xl-between {
                    align-content: space-between !important;
                }
                .align-content-xl-around {
                    align-content: space-around !important;
                }
                .align-self-xl-auto {
                    align-self: auto !important;
                }
                .align-self-xl-start {
                    align-self: flex-start !important;
                }
                .align-self-xl-end {
                    align-self: flex-end !important;
                }
                .align-self-xl-center {
                    align-self: center !important;
                }
            }
            @media (min-width: 1800px) {
                .flex-xxl-row {
                    flex-direction: row !important;
                }
                .flex-xxl-column {
                    flex-direction: column !important;
                }
                .flex-xxl-row-reverse {
                    flex-direction: row-reverse !important;
                }
                .flex-xxl-column-reverse {
                    flex-direction: column-reverse !important;
                }
                .flex-xxl-wrap {
                    flex-wrap: wrap !important;
                }
                .flex-xxl-nowrap {
                    flex-wrap: nowrap !important;
                }
                .flex-xxl-wrap-reverse {
                    flex-wrap: wrap-reverse !important;
                }
                .justify-content-xxl-start {
                    justify-content: flex-start !important;
                }
                .justify-content-xxl-end {
                    justify-content: flex-end !important;
                }
                .justify-content-xxl-center {
                    justify-content: center !important;
                }
                .justify-content-xxl-between {
                    justify-content: space-between !important;
                }
                .justify-content-xxl-around {
                    justify-content: space-around !important;
                }
                .align-items-xxl-start {
                    align-items: flex-start !important;
                }
                .align-items-xxl-end {
                    align-items: flex-end !important;
                }
                .align-items-xxl-center {
                    align-items: center !important;
                }
                .align-content-xxl-start {
                    align-content: flex-start !important;
                }
                .align-content-xxl-end {
                    align-content: flex-end !important;
                }
                .align-content-xxl-center {
                    align-content: center !important;
                }
                .align-content-xxl-between {
                    align-content: space-between !important;
                }
                .align-content-xxl-around {
                    align-content: space-around !important;
                }
                .align-self-xxl-auto {
                    align-self: auto !important;
                }
                .align-self-xxl-start {
                    align-self: flex-start !important;
                }
                .align-self-xxl-end {
                    align-self: flex-end !important;
                }
                .align-self-xxl-center {
                    align-self: center !important;
                }
            }
            .float-left {
                float: left !important;
            }
            .float-right {
                float: right !important;
            }
            .float-none {
                float: none !important;
            }
            @media (min-width: 576px) {
                .float-sm-left {
                    float: left !important;
                }
                .float-sm-right {
                    float: right !important;
                }
                .float-sm-none {
                    float: none !important;
                }
            }
            @media (min-width: 1024px) {
                .float-md-left {
                    float: left !important;
                }
                .float-md-right {
                    float: right !important;
                }
                .float-md-none {
                    float: none !important;
                }
            }
            @media (min-width: 1280px) {
                .float-lg-left {
                    float: left !important;
                }
                .float-lg-right {
                    float: right !important;
                }
                .float-lg-none {
                    float: none !important;
                }
            }
            @media (min-width: 1400px) {
                .float-xl-left {
                    float: left !important;
                }
                .float-xl-right {
                    float: right !important;
                }
                .float-xl-none {
                    float: none !important;
                }
            }
            @media (min-width: 1800px) {
                .float-xxl-left {
                    float: left !important;
                }
                .float-xxl-right {
                    float: right !important;
                }
                .float-xxl-none {
                    float: none !important;
                }
            }
            .position-static {
                position: static !important;
            }
            .position-relative {
                position: relative !important;
            }
            .position-absolute {
                position: absolute !important;
            }
            .position-fixed {
                position: fixed !important;
            }
            .position-sticky {
                position: -webkit-sticky !important;
                position: sticky !important;
            }
            .fixed-top {
                top: 0;
            }
            .fixed-bottom,
            .fixed-top {
                position: fixed;
                right: 0;
                left: 0;
                z-index: 1030;
            }
            .fixed-bottom {
                bottom: 0;
            }
            @supports ((position: -webkit-sticky) or (position: sticky)) {
                .sticky-top {
                    position: -webkit-sticky;
                    position: sticky;
                    top: 0;
                    z-index: 1020;
                }
            }
            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
                border: 0;
            }
            .w-25 {
                width: 25% !important;
            }
            .w-50 {
                width: 50% !important;
            }
            .w-75 {
                width: 75% !important;
            }
            .w-100 {
                width: 100% !important;
            }
            .h-25 {
                height: 25% !important;
            }
            .h-50 {
                height: 50% !important;
            }
            .h-75 {
                height: 75% !important;
            }
            .h-100 {
                height: 100% !important;
            }
            .mw-100 {
                max-width: 100% !important;
            }
            .mh-100 {
                max-height: 100% !important;
            }
            .m-0 {
                margin: 0 !important;
            }
            .mt-0,
            .my-0 {
                margin-top: 0 !important;
            }
            .mr-0,
            .mx-0 {
                margin-right: 0 !important;
            }
            .mb-0,
            .my-0 {
                margin-bottom: 0 !important;
            }
            .ml-0,
            .mx-0 {
                margin-left: 0 !important;
            }
            .m-1 {
                margin: 0.125rem !important;
            }
            .mt-1,
            .my-1 {
                margin-top: 0.125rem !important;
            }
            .mr-1,
            .mx-1 {
                margin-right: 0.125rem !important;
            }
            .mb-1,
            .my-1 {
                margin-bottom: 0.125rem !important;
            }
            .ml-1,
            .mx-1 {
                margin-left: 0.125rem !important;
            }
            .m-2 {
                margin: 0.25rem !important;
            }
            .mt-2,
            .my-2 {
                margin-top: 0.25rem !important;
            }
            .mr-2,
            .mx-2 {
                margin-right: 0.25rem !important;
            }
            .mb-2,
            .my-2 {
                margin-bottom: 0.25rem !important;
            }
            .ml-2,
            .mx-2 {
                margin-left: 0.25rem !important;
            }
            .m-2-5 {
                margin: 0.5rem !important;
            }
            .mt-2-5,
            .my-2-5 {
                margin-top: 0.5rem !important;
            }
            .mr-2-5,
            .mx-2-5 {
                margin-right: 0.5rem !important;
            }
            .mb-2-5,
            .my-2-5 {
                margin-bottom: 0.5rem !important;
            }
            .ml-2-5,
            .mx-2-5 {
                margin-left: 0.5rem !important;
            }
            .m-3 {
                margin: 0.75rem !important;
            }
            .mt-3,
            .my-3 {
                margin-top: 0.75rem !important;
            }
            .mr-3,
            .mx-3 {
                margin-right: 0.75rem !important;
            }
            .mb-3,
            .my-3 {
                margin-bottom: 0.75rem !important;
            }
            .ml-3,
            .mx-3 {
                margin-left: 0.75rem !important;
            }
            .m-4 {
                margin: 1rem !important;
            }
            .mt-4,
            .my-4 {
                margin-top: 1rem !important;
            }
            .mr-4,
            .mx-4 {
                margin-right: 1rem !important;
            }
            .mb-4,
            .my-4 {
                margin-bottom: 1rem !important;
            }
            .ml-4,
            .mx-4 {
                margin-left: 1rem !important;
            }
            .m-5 {
                margin: 1.25rem !important;
            }
            .mt-5,
            .my-5 {
                margin-top: 1.25rem !important;
            }
            .mr-5,
            .mx-5 {
                margin-right: 1.25rem !important;
            }
            .mb-5,
            .my-5 {
                margin-bottom: 1.25rem !important;
            }
            .ml-5,
            .mx-5 {
                margin-left: 1.25rem !important;
            }
            .m-5-5 {
                margin: 1.5rem !important;
            }
            .mt-5-5,
            .my-5-5 {
                margin-top: 1.5rem !important;
            }
            .mr-5-5,
            .mx-5-5 {
                margin-right: 1.5rem !important;
            }
            .mb-5-5,
            .my-5-5 {
                margin-bottom: 1.5rem !important;
            }
            .ml-5-5,
            .mx-5-5 {
                margin-left: 1.5rem !important;
            }
            .m-6 {
                margin: 2rem !important;
            }
            .mt-6,
            .my-6 {
                margin-top: 2rem !important;
            }
            .mr-6,
            .mx-6 {
                margin-right: 2rem !important;
            }
            .mb-6,
            .my-6 {
                margin-bottom: 2rem !important;
            }
            .ml-6,
            .mx-6 {
                margin-left: 2rem !important;
            }
            .m-7 {
                margin: 2.5rem !important;
            }
            .mt-7,
            .my-7 {
                margin-top: 2.5rem !important;
            }
            .mr-7,
            .mx-7 {
                margin-right: 2.5rem !important;
            }
            .mb-7,
            .my-7 {
                margin-bottom: 2.5rem !important;
            }
            .ml-7,
            .mx-7 {
                margin-left: 2.5rem !important;
            }
            .m-8 {
                margin: 3rem !important;
            }
            .mt-8,
            .my-8 {
                margin-top: 3rem !important;
            }
            .mr-8,
            .mx-8 {
                margin-right: 3rem !important;
            }
            .mb-8,
            .my-8 {
                margin-bottom: 3rem !important;
            }
            .ml-8,
            .mx-8 {
                margin-left: 3rem !important;
            }
            .m-9 {
                margin: 5rem !important;
            }
            .mt-9,
            .my-9 {
                margin-top: 5rem !important;
            }
            .mr-9,
            .mx-9 {
                margin-right: 5rem !important;
            }
            .mb-9,
            .my-9 {
                margin-bottom: 5rem !important;
            }
            .ml-9,
            .mx-9 {
                margin-left: 5rem !important;
            }
            .m-10 {
                margin: 7rem !important;
            }
            .mt-10,
            .my-10 {
                margin-top: 7rem !important;
            }
            .mr-10,
            .mx-10 {
                margin-right: 7rem !important;
            }
            .mb-10,
            .my-10 {
                margin-bottom: 7rem !important;
            }
            .ml-10,
            .mx-10 {
                margin-left: 7rem !important;
            }
            .m-11 {
                margin: 9rem !important;
            }
            .mt-11,
            .my-11 {
                margin-top: 9rem !important;
            }
            .mr-11,
            .mx-11 {
                margin-right: 9rem !important;
            }
            .mb-11,
            .my-11 {
                margin-bottom: 9rem !important;
            }
            .ml-11,
            .mx-11 {
                margin-left: 9rem !important;
            }
            .m-12 {
                margin: 12rem !important;
            }
            .mt-12,
            .my-12 {
                margin-top: 12rem !important;
            }
            .mr-12,
            .mx-12 {
                margin-right: 12rem !important;
            }
            .mb-12,
            .my-12 {
                margin-bottom: 12rem !important;
            }
            .ml-12,
            .mx-12 {
                margin-left: 12rem !important;
            }
            .p-0 {
                padding: 0 !important;
            }
            .pt-0,
            .py-0 {
                padding-top: 0 !important;
            }
            .pr-0,
            .px-0 {
                padding-right: 0 !important;
            }
            .pb-0,
            .py-0 {
                padding-bottom: 0 !important;
            }
            .pl-0,
            .px-0 {
                padding-left: 0 !important;
            }
            .p-1 {
                padding: 0.125rem !important;
            }
            .pt-1,
            .py-1 {
                padding-top: 0.125rem !important;
            }
            .pr-1,
            .px-1 {
                padding-right: 0.125rem !important;
            }
            .pb-1,
            .py-1 {
                padding-bottom: 0.125rem !important;
            }
            .pl-1,
            .px-1 {
                padding-left: 0.125rem !important;
            }
            .p-2 {
                padding: 0.25rem !important;
            }
            .pt-2,
            .py-2 {
                padding-top: 0.25rem !important;
            }
            .pr-2,
            .px-2 {
                padding-right: 0.25rem !important;
            }
            .pb-2,
            .py-2 {
                padding-bottom: 0.25rem !important;
            }
            .pl-2,
            .px-2 {
                padding-left: 0.25rem !important;
            }
            .p-2-5 {
                padding: 0.5rem !important;
            }
            .pt-2-5,
            .py-2-5 {
                padding-top: 0.5rem !important;
            }
            .pr-2-5,
            .px-2-5 {
                padding-right: 0.5rem !important;
            }
            .pb-2-5,
            .py-2-5 {
                padding-bottom: 0.5rem !important;
            }
            .pl-2-5,
            .px-2-5 {
                padding-left: 0.5rem !important;
            }
            .p-3 {
                padding: 0.75rem !important;
            }
            .pt-3,
            .py-3 {
                padding-top: 0.75rem !important;
            }
            .pr-3,
            .px-3 {
                padding-right: 0.75rem !important;
            }
            .pb-3,
            .py-3 {
                padding-bottom: 0.75rem !important;
            }
            .pl-3,
            .px-3 {
                padding-left: 0.75rem !important;
            }
            .p-4 {
                padding: 1rem !important;
            }
            .pt-4,
            .py-4 {
                padding-top: 1rem !important;
            }
            .pr-4,
            .px-4 {
                padding-right: 1rem !important;
            }
            .pb-4,
            .py-4 {
                padding-bottom: 1rem !important;
            }
            .pl-4,
            .px-4 {
                padding-left: 1rem !important;
            }
            .p-5 {
                padding: 1.25rem !important;
            }
            .pt-5,
            .py-5 {
                padding-top: 1.25rem !important;
            }
            .pr-5,
            .px-5 {
                padding-right: 1.25rem !important;
            }
            .pb-5,
            .py-5 {
                padding-bottom: 1.25rem !important;
            }
            .pl-5,
            .px-5 {
                padding-left: 1.25rem !important;
            }
            .p-5-5 {
                padding: 1.5rem !important;
            }
            .pt-5-5,
            .py-5-5 {
                padding-top: 1.5rem !important;
            }
            .pr-5-5,
            .px-5-5 {
                padding-right: 1.5rem !important;
            }
            .pb-5-5,
            .py-5-5 {
                padding-bottom: 1.5rem !important;
            }
            .pl-5-5,
            .px-5-5 {
                padding-left: 1.5rem !important;
            }
            .p-6 {
                padding: 2rem !important;
            }
            .pt-6,
            .py-6 {
                padding-top: 2rem !important;
            }
            .pr-6,
            .px-6 {
                padding-right: 2rem !important;
            }
            .pb-6,
            .py-6 {
                padding-bottom: 2rem !important;
            }
            .pl-6,
            .px-6 {
                padding-left: 2rem !important;
            }
            .p-7 {
                padding: 2.5rem !important;
            }
            .pt-7,
            .py-7 {
                padding-top: 2.5rem !important;
            }
            .pr-7,
            .px-7 {
                padding-right: 2.5rem !important;
            }
            .pb-7,
            .py-7 {
                padding-bottom: 2.5rem !important;
            }
            .pl-7,
            .px-7 {
                padding-left: 2.5rem !important;
            }
            .p-8 {
                padding: 3rem !important;
            }
            .pt-8,
            .py-8 {
                padding-top: 3rem !important;
            }
            .pr-8,
            .px-8 {
                padding-right: 3rem !important;
            }
            .pb-8,
            .py-8 {
                padding-bottom: 3rem !important;
            }
            .pl-8,
            .px-8 {
                padding-left: 3rem !important;
            }
            .p-9 {
                padding: 5rem !important;
            }
            .pt-9,
            .py-9 {
                padding-top: 5rem !important;
            }
            .pr-9,
            .px-9 {
                padding-right: 5rem !important;
            }
            .pb-9,
            .py-9 {
                padding-bottom: 5rem !important;
            }
            .pl-9,
            .px-9 {
                padding-left: 5rem !important;
            }
            .p-10 {
                padding: 7rem !important;
            }
            .pt-10,
            .py-10 {
                padding-top: 7rem !important;
            }
            .pr-10,
            .px-10 {
                padding-right: 7rem !important;
            }
            .pb-10,
            .py-10 {
                padding-bottom: 7rem !important;
            }
            .pl-10,
            .px-10 {
                padding-left: 7rem !important;
            }
            .p-11 {
                padding: 9rem !important;
            }
            .pt-11,
            .py-11 {
                padding-top: 9rem !important;
            }
            .pr-11,
            .px-11 {
                padding-right: 9rem !important;
            }
            .pb-11,
            .py-11 {
                padding-bottom: 9rem !important;
            }
            .pl-11,
            .px-11 {
                padding-left: 9rem !important;
            }
            .p-12 {
                padding: 12rem !important;
            }
            .pt-12,
            .py-12 {
                padding-top: 12rem !important;
            }
            .pr-12,
            .px-12 {
                padding-right: 12rem !important;
            }
            .pb-12,
            .py-12 {
                padding-bottom: 12rem !important;
            }
            .pl-12,
            .px-12 {
                padding-left: 12rem !important;
            }
            .m-auto {
                margin: auto !important;
            }
            .mt-auto,
            .my-auto {
                margin-top: auto !important;
            }
            .mr-auto,
            .mx-auto {
                margin-right: auto !important;
            }
            .mb-auto,
            .my-auto {
                margin-bottom: auto !important;
            }
            .ml-auto,
            .mx-auto {
                margin-left: auto !important;
            }
            @media (min-width: 576px) {
                .m-sm-0 {
                    margin: 0 !important;
                }
                .mt-sm-0,
                .my-sm-0 {
                    margin-top: 0 !important;
                }
                .mr-sm-0,
                .mx-sm-0 {
                    margin-right: 0 !important;
                }
                .mb-sm-0,
                .my-sm-0 {
                    margin-bottom: 0 !important;
                }
                .ml-sm-0,
                .mx-sm-0 {
                    margin-left: 0 !important;
                }
                .m-sm-1 {
                    margin: 0.125rem !important;
                }
                .mt-sm-1,
                .my-sm-1 {
                    margin-top: 0.125rem !important;
                }
                .mr-sm-1,
                .mx-sm-1 {
                    margin-right: 0.125rem !important;
                }
                .mb-sm-1,
                .my-sm-1 {
                    margin-bottom: 0.125rem !important;
                }
                .ml-sm-1,
                .mx-sm-1 {
                    margin-left: 0.125rem !important;
                }
                .m-sm-2 {
                    margin: 0.25rem !important;
                }
                .mt-sm-2,
                .my-sm-2 {
                    margin-top: 0.25rem !important;
                }
                .mr-sm-2,
                .mx-sm-2 {
                    margin-right: 0.25rem !important;
                }
                .mb-sm-2,
                .my-sm-2 {
                    margin-bottom: 0.25rem !important;
                }
                .ml-sm-2,
                .mx-sm-2 {
                    margin-left: 0.25rem !important;
                }
                .m-sm-2-5 {
                    margin: 0.5rem !important;
                }
                .mt-sm-2-5,
                .my-sm-2-5 {
                    margin-top: 0.5rem !important;
                }
                .mr-sm-2-5,
                .mx-sm-2-5 {
                    margin-right: 0.5rem !important;
                }
                .mb-sm-2-5,
                .my-sm-2-5 {
                    margin-bottom: 0.5rem !important;
                }
                .ml-sm-2-5,
                .mx-sm-2-5 {
                    margin-left: 0.5rem !important;
                }
                .m-sm-3 {
                    margin: 0.75rem !important;
                }
                .mt-sm-3,
                .my-sm-3 {
                    margin-top: 0.75rem !important;
                }
                .mr-sm-3,
                .mx-sm-3 {
                    margin-right: 0.75rem !important;
                }
                .mb-sm-3,
                .my-sm-3 {
                    margin-bottom: 0.75rem !important;
                }
                .ml-sm-3,
                .mx-sm-3 {
                    margin-left: 0.75rem !important;
                }
                .m-sm-4 {
                    margin: 1rem !important;
                }
                .mt-sm-4,
                .my-sm-4 {
                    margin-top: 1rem !important;
                }
                .mr-sm-4,
                .mx-sm-4 {
                    margin-right: 1rem !important;
                }
                .mb-sm-4,
                .my-sm-4 {
                    margin-bottom: 1rem !important;
                }
                .ml-sm-4,
                .mx-sm-4 {
                    margin-left: 1rem !important;
                }
                .m-sm-5 {
                    margin: 1.25rem !important;
                }
                .mt-sm-5,
                .my-sm-5 {
                    margin-top: 1.25rem !important;
                }
                .mr-sm-5,
                .mx-sm-5 {
                    margin-right: 1.25rem !important;
                }
                .mb-sm-5,
                .my-sm-5 {
                    margin-bottom: 1.25rem !important;
                }
                .ml-sm-5,
                .mx-sm-5 {
                    margin-left: 1.25rem !important;
                }
                .m-sm-5-5 {
                    margin: 1.5rem !important;
                }
                .mt-sm-5-5,
                .my-sm-5-5 {
                    margin-top: 1.5rem !important;
                }
                .mr-sm-5-5,
                .mx-sm-5-5 {
                    margin-right: 1.5rem !important;
                }
                .mb-sm-5-5,
                .my-sm-5-5 {
                    margin-bottom: 1.5rem !important;
                }
                .ml-sm-5-5,
                .mx-sm-5-5 {
                    margin-left: 1.5rem !important;
                }
                .m-sm-6 {
                    margin: 2rem !important;
                }
                .mt-sm-6,
                .my-sm-6 {
                    margin-top: 2rem !important;
                }
                .mr-sm-6,
                .mx-sm-6 {
                    margin-right: 2rem !important;
                }
                .mb-sm-6,
                .my-sm-6 {
                    margin-bottom: 2rem !important;
                }
                .ml-sm-6,
                .mx-sm-6 {
                    margin-left: 2rem !important;
                }
                .m-sm-7 {
                    margin: 2.5rem !important;
                }
                .mt-sm-7,
                .my-sm-7 {
                    margin-top: 2.5rem !important;
                }
                .mr-sm-7,
                .mx-sm-7 {
                    margin-right: 2.5rem !important;
                }
                .mb-sm-7,
                .my-sm-7 {
                    margin-bottom: 2.5rem !important;
                }
                .ml-sm-7,
                .mx-sm-7 {
                    margin-left: 2.5rem !important;
                }
                .m-sm-8 {
                    margin: 3rem !important;
                }
                .mt-sm-8,
                .my-sm-8 {
                    margin-top: 3rem !important;
                }
                .mr-sm-8,
                .mx-sm-8 {
                    margin-right: 3rem !important;
                }
                .mb-sm-8,
                .my-sm-8 {
                    margin-bottom: 3rem !important;
                }
                .ml-sm-8,
                .mx-sm-8 {
                    margin-left: 3rem !important;
                }
                .m-sm-9 {
                    margin: 5rem !important;
                }
                .mt-sm-9,
                .my-sm-9 {
                    margin-top: 5rem !important;
                }
                .mr-sm-9,
                .mx-sm-9 {
                    margin-right: 5rem !important;
                }
                .mb-sm-9,
                .my-sm-9 {
                    margin-bottom: 5rem !important;
                }
                .ml-sm-9,
                .mx-sm-9 {
                    margin-left: 5rem !important;
                }
                .m-sm-10 {
                    margin: 7rem !important;
                }
                .mt-sm-10,
                .my-sm-10 {
                    margin-top: 7rem !important;
                }
                .mr-sm-10,
                .mx-sm-10 {
                    margin-right: 7rem !important;
                }
                .mb-sm-10,
                .my-sm-10 {
                    margin-bottom: 7rem !important;
                }
                .ml-sm-10,
                .mx-sm-10 {
                    margin-left: 7rem !important;
                }
                .m-sm-11 {
                    margin: 9rem !important;
                }
                .mt-sm-11,
                .my-sm-11 {
                    margin-top: 9rem !important;
                }
                .mr-sm-11,
                .mx-sm-11 {
                    margin-right: 9rem !important;
                }
                .mb-sm-11,
                .my-sm-11 {
                    margin-bottom: 9rem !important;
                }
                .ml-sm-11,
                .mx-sm-11 {
                    margin-left: 9rem !important;
                }
                .m-sm-12 {
                    margin: 12rem !important;
                }
                .mt-sm-12,
                .my-sm-12 {
                    margin-top: 12rem !important;
                }
                .mr-sm-12,
                .mx-sm-12 {
                    margin-right: 12rem !important;
                }
                .mb-sm-12,
                .my-sm-12 {
                    margin-bottom: 12rem !important;
                }
                .ml-sm-12,
                .mx-sm-12 {
                    margin-left: 12rem !important;
                }
                .p-sm-0 {
                    padding: 0 !important;
                }
                .pt-sm-0,
                .py-sm-0 {
                    padding-top: 0 !important;
                }
                .pr-sm-0,
                .px-sm-0 {
                    padding-right: 0 !important;
                }
                .pb-sm-0,
                .py-sm-0 {
                    padding-bottom: 0 !important;
                }
                .pl-sm-0,
                .px-sm-0 {
                    padding-left: 0 !important;
                }
                .p-sm-1 {
                    padding: 0.125rem !important;
                }
                .pt-sm-1,
                .py-sm-1 {
                    padding-top: 0.125rem !important;
                }
                .pr-sm-1,
                .px-sm-1 {
                    padding-right: 0.125rem !important;
                }
                .pb-sm-1,
                .py-sm-1 {
                    padding-bottom: 0.125rem !important;
                }
                .pl-sm-1,
                .px-sm-1 {
                    padding-left: 0.125rem !important;
                }
                .p-sm-2 {
                    padding: 0.25rem !important;
                }
                .pt-sm-2,
                .py-sm-2 {
                    padding-top: 0.25rem !important;
                }
                .pr-sm-2,
                .px-sm-2 {
                    padding-right: 0.25rem !important;
                }
                .pb-sm-2,
                .py-sm-2 {
                    padding-bottom: 0.25rem !important;
                }
                .pl-sm-2,
                .px-sm-2 {
                    padding-left: 0.25rem !important;
                }
                .p-sm-2-5 {
                    padding: 0.5rem !important;
                }
                .pt-sm-2-5,
                .py-sm-2-5 {
                    padding-top: 0.5rem !important;
                }
                .pr-sm-2-5,
                .px-sm-2-5 {
                    padding-right: 0.5rem !important;
                }
                .pb-sm-2-5,
                .py-sm-2-5 {
                    padding-bottom: 0.5rem !important;
                }
                .pl-sm-2-5,
                .px-sm-2-5 {
                    padding-left: 0.5rem !important;
                }
                .p-sm-3 {
                    padding: 0.75rem !important;
                }
                .pt-sm-3,
                .py-sm-3 {
                    padding-top: 0.75rem !important;
                }
                .pr-sm-3,
                .px-sm-3 {
                    padding-right: 0.75rem !important;
                }
                .pb-sm-3,
                .py-sm-3 {
                    padding-bottom: 0.75rem !important;
                }
                .pl-sm-3,
                .px-sm-3 {
                    padding-left: 0.75rem !important;
                }
                .p-sm-4 {
                    padding: 1rem !important;
                }
                .pt-sm-4,
                .py-sm-4 {
                    padding-top: 1rem !important;
                }
                .pr-sm-4,
                .px-sm-4 {
                    padding-right: 1rem !important;
                }
                .pb-sm-4,
                .py-sm-4 {
                    padding-bottom: 1rem !important;
                }
                .pl-sm-4,
                .px-sm-4 {
                    padding-left: 1rem !important;
                }
                .p-sm-5 {
                    padding: 1.25rem !important;
                }
                .pt-sm-5,
                .py-sm-5 {
                    padding-top: 1.25rem !important;
                }
                .pr-sm-5,
                .px-sm-5 {
                    padding-right: 1.25rem !important;
                }
                .pb-sm-5,
                .py-sm-5 {
                    padding-bottom: 1.25rem !important;
                }
                .pl-sm-5,
                .px-sm-5 {
                    padding-left: 1.25rem !important;
                }
                .p-sm-5-5 {
                    padding: 1.5rem !important;
                }
                .pt-sm-5-5,
                .py-sm-5-5 {
                    padding-top: 1.5rem !important;
                }
                .pr-sm-5-5,
                .px-sm-5-5 {
                    padding-right: 1.5rem !important;
                }
                .pb-sm-5-5,
                .py-sm-5-5 {
                    padding-bottom: 1.5rem !important;
                }
                .pl-sm-5-5,
                .px-sm-5-5 {
                    padding-left: 1.5rem !important;
                }
                .p-sm-6 {
                    padding: 2rem !important;
                }
                .pt-sm-6,
                .py-sm-6 {
                    padding-top: 2rem !important;
                }
                .pr-sm-6,
                .px-sm-6 {
                    padding-right: 2rem !important;
                }
                .pb-sm-6,
                .py-sm-6 {
                    padding-bottom: 2rem !important;
                }
                .pl-sm-6,
                .px-sm-6 {
                    padding-left: 2rem !important;
                }
                .p-sm-7 {
                    padding: 2.5rem !important;
                }
                .pt-sm-7,
                .py-sm-7 {
                    padding-top: 2.5rem !important;
                }
                .pr-sm-7,
                .px-sm-7 {
                    padding-right: 2.5rem !important;
                }
                .pb-sm-7,
                .py-sm-7 {
                    padding-bottom: 2.5rem !important;
                }
                .pl-sm-7,
                .px-sm-7 {
                    padding-left: 2.5rem !important;
                }
                .p-sm-8 {
                    padding: 3rem !important;
                }
                .pt-sm-8,
                .py-sm-8 {
                    padding-top: 3rem !important;
                }
                .pr-sm-8,
                .px-sm-8 {
                    padding-right: 3rem !important;
                }
                .pb-sm-8,
                .py-sm-8 {
                    padding-bottom: 3rem !important;
                }
                .pl-sm-8,
                .px-sm-8 {
                    padding-left: 3rem !important;
                }
                .p-sm-9 {
                    padding: 5rem !important;
                }
                .pt-sm-9,
                .py-sm-9 {
                    padding-top: 5rem !important;
                }
                .pr-sm-9,
                .px-sm-9 {
                    padding-right: 5rem !important;
                }
                .pb-sm-9,
                .py-sm-9 {
                    padding-bottom: 5rem !important;
                }
                .pl-sm-9,
                .px-sm-9 {
                    padding-left: 5rem !important;
                }
                .p-sm-10 {
                    padding: 7rem !important;
                }
                .pt-sm-10,
                .py-sm-10 {
                    padding-top: 7rem !important;
                }
                .pr-sm-10,
                .px-sm-10 {
                    padding-right: 7rem !important;
                }
                .pb-sm-10,
                .py-sm-10 {
                    padding-bottom: 7rem !important;
                }
                .pl-sm-10,
                .px-sm-10 {
                    padding-left: 7rem !important;
                }
                .p-sm-11 {
                    padding: 9rem !important;
                }
                .pt-sm-11,
                .py-sm-11 {
                    padding-top: 9rem !important;
                }
                .pr-sm-11,
                .px-sm-11 {
                    padding-right: 9rem !important;
                }
                .pb-sm-11,
                .py-sm-11 {
                    padding-bottom: 9rem !important;
                }
                .pl-sm-11,
                .px-sm-11 {
                    padding-left: 9rem !important;
                }
                .p-sm-12 {
                    padding: 12rem !important;
                }
                .pt-sm-12,
                .py-sm-12 {
                    padding-top: 12rem !important;
                }
                .pr-sm-12,
                .px-sm-12 {
                    padding-right: 12rem !important;
                }
                .pb-sm-12,
                .py-sm-12 {
                    padding-bottom: 12rem !important;
                }
                .pl-sm-12,
                .px-sm-12 {
                    padding-left: 12rem !important;
                }
                .m-sm-auto {
                    margin: auto !important;
                }
                .mt-sm-auto,
                .my-sm-auto {
                    margin-top: auto !important;
                }
                .mr-sm-auto,
                .mx-sm-auto {
                    margin-right: auto !important;
                }
                .mb-sm-auto,
                .my-sm-auto {
                    margin-bottom: auto !important;
                }
                .ml-sm-auto,
                .mx-sm-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1024px) {
                .m-md-0 {
                    margin: 0 !important;
                }
                .mt-md-0,
                .my-md-0 {
                    margin-top: 0 !important;
                }
                .mr-md-0,
                .mx-md-0 {
                    margin-right: 0 !important;
                }
                .mb-md-0,
                .my-md-0 {
                    margin-bottom: 0 !important;
                }
                .ml-md-0,
                .mx-md-0 {
                    margin-left: 0 !important;
                }
                .m-md-1 {
                    margin: 0.125rem !important;
                }
                .mt-md-1,
                .my-md-1 {
                    margin-top: 0.125rem !important;
                }
                .mr-md-1,
                .mx-md-1 {
                    margin-right: 0.125rem !important;
                }
                .mb-md-1,
                .my-md-1 {
                    margin-bottom: 0.125rem !important;
                }
                .ml-md-1,
                .mx-md-1 {
                    margin-left: 0.125rem !important;
                }
                .m-md-2 {
                    margin: 0.25rem !important;
                }
                .mt-md-2,
                .my-md-2 {
                    margin-top: 0.25rem !important;
                }
                .mr-md-2,
                .mx-md-2 {
                    margin-right: 0.25rem !important;
                }
                .mb-md-2,
                .my-md-2 {
                    margin-bottom: 0.25rem !important;
                }
                .ml-md-2,
                .mx-md-2 {
                    margin-left: 0.25rem !important;
                }
                .m-md-2-5 {
                    margin: 0.5rem !important;
                }
                .mt-md-2-5,
                .my-md-2-5 {
                    margin-top: 0.5rem !important;
                }
                .mr-md-2-5,
                .mx-md-2-5 {
                    margin-right: 0.5rem !important;
                }
                .mb-md-2-5,
                .my-md-2-5 {
                    margin-bottom: 0.5rem !important;
                }
                .ml-md-2-5,
                .mx-md-2-5 {
                    margin-left: 0.5rem !important;
                }
                .m-md-3 {
                    margin: 0.75rem !important;
                }
                .mt-md-3,
                .my-md-3 {
                    margin-top: 0.75rem !important;
                }
                .mr-md-3,
                .mx-md-3 {
                    margin-right: 0.75rem !important;
                }
                .mb-md-3,
                .my-md-3 {
                    margin-bottom: 0.75rem !important;
                }
                .ml-md-3,
                .mx-md-3 {
                    margin-left: 0.75rem !important;
                }
                .m-md-4 {
                    margin: 1rem !important;
                }
                .mt-md-4,
                .my-md-4 {
                    margin-top: 1rem !important;
                }
                .mr-md-4,
                .mx-md-4 {
                    margin-right: 1rem !important;
                }
                .mb-md-4,
                .my-md-4 {
                    margin-bottom: 1rem !important;
                }
                .ml-md-4,
                .mx-md-4 {
                    margin-left: 1rem !important;
                }
                .m-md-5 {
                    margin: 1.25rem !important;
                }
                .mt-md-5,
                .my-md-5 {
                    margin-top: 1.25rem !important;
                }
                .mr-md-5,
                .mx-md-5 {
                    margin-right: 1.25rem !important;
                }
                .mb-md-5,
                .my-md-5 {
                    margin-bottom: 1.25rem !important;
                }
                .ml-md-5,
                .mx-md-5 {
                    margin-left: 1.25rem !important;
                }
                .m-md-5-5 {
                    margin: 1.5rem !important;
                }
                .mt-md-5-5,
                .my-md-5-5 {
                    margin-top: 1.5rem !important;
                }
                .mr-md-5-5,
                .mx-md-5-5 {
                    margin-right: 1.5rem !important;
                }
                .mb-md-5-5,
                .my-md-5-5 {
                    margin-bottom: 1.5rem !important;
                }
                .ml-md-5-5,
                .mx-md-5-5 {
                    margin-left: 1.5rem !important;
                }
                .m-md-6 {
                    margin: 2rem !important;
                }
                .mt-md-6,
                .my-md-6 {
                    margin-top: 2rem !important;
                }
                .mr-md-6,
                .mx-md-6 {
                    margin-right: 2rem !important;
                }
                .mb-md-6,
                .my-md-6 {
                    margin-bottom: 2rem !important;
                }
                .ml-md-6,
                .mx-md-6 {
                    margin-left: 2rem !important;
                }
                .m-md-7 {
                    margin: 2.5rem !important;
                }
                .mt-md-7,
                .my-md-7 {
                    margin-top: 2.5rem !important;
                }
                .mr-md-7,
                .mx-md-7 {
                    margin-right: 2.5rem !important;
                }
                .mb-md-7,
                .my-md-7 {
                    margin-bottom: 2.5rem !important;
                }
                .ml-md-7,
                .mx-md-7 {
                    margin-left: 2.5rem !important;
                }
                .m-md-8 {
                    margin: 3rem !important;
                }
                .mt-md-8,
                .my-md-8 {
                    margin-top: 3rem !important;
                }
                .mr-md-8,
                .mx-md-8 {
                    margin-right: 3rem !important;
                }
                .mb-md-8,
                .my-md-8 {
                    margin-bottom: 3rem !important;
                }
                .ml-md-8,
                .mx-md-8 {
                    margin-left: 3rem !important;
                }
                .m-md-9 {
                    margin: 5rem !important;
                }
                .mt-md-9,
                .my-md-9 {
                    margin-top: 5rem !important;
                }
                .mr-md-9,
                .mx-md-9 {
                    margin-right: 5rem !important;
                }
                .mb-md-9,
                .my-md-9 {
                    margin-bottom: 5rem !important;
                }
                .ml-md-9,
                .mx-md-9 {
                    margin-left: 5rem !important;
                }
                .m-md-10 {
                    margin: 7rem !important;
                }
                .mt-md-10,
                .my-md-10 {
                    margin-top: 7rem !important;
                }
                .mr-md-10,
                .mx-md-10 {
                    margin-right: 7rem !important;
                }
                .mb-md-10,
                .my-md-10 {
                    margin-bottom: 7rem !important;
                }
                .ml-md-10,
                .mx-md-10 {
                    margin-left: 7rem !important;
                }
                .m-md-11 {
                    margin: 9rem !important;
                }
                .mt-md-11,
                .my-md-11 {
                    margin-top: 9rem !important;
                }
                .mr-md-11,
                .mx-md-11 {
                    margin-right: 9rem !important;
                }
                .mb-md-11,
                .my-md-11 {
                    margin-bottom: 9rem !important;
                }
                .ml-md-11,
                .mx-md-11 {
                    margin-left: 9rem !important;
                }
                .m-md-12 {
                    margin: 12rem !important;
                }
                .mt-md-12,
                .my-md-12 {
                    margin-top: 12rem !important;
                }
                .mr-md-12,
                .mx-md-12 {
                    margin-right: 12rem !important;
                }
                .mb-md-12,
                .my-md-12 {
                    margin-bottom: 12rem !important;
                }
                .ml-md-12,
                .mx-md-12 {
                    margin-left: 12rem !important;
                }
                .p-md-0 {
                    padding: 0 !important;
                }
                .pt-md-0,
                .py-md-0 {
                    padding-top: 0 !important;
                }
                .pr-md-0,
                .px-md-0 {
                    padding-right: 0 !important;
                }
                .pb-md-0,
                .py-md-0 {
                    padding-bottom: 0 !important;
                }
                .pl-md-0,
                .px-md-0 {
                    padding-left: 0 !important;
                }
                .p-md-1 {
                    padding: 0.125rem !important;
                }
                .pt-md-1,
                .py-md-1 {
                    padding-top: 0.125rem !important;
                }
                .pr-md-1,
                .px-md-1 {
                    padding-right: 0.125rem !important;
                }
                .pb-md-1,
                .py-md-1 {
                    padding-bottom: 0.125rem !important;
                }
                .pl-md-1,
                .px-md-1 {
                    padding-left: 0.125rem !important;
                }
                .p-md-2 {
                    padding: 0.25rem !important;
                }
                .pt-md-2,
                .py-md-2 {
                    padding-top: 0.25rem !important;
                }
                .pr-md-2,
                .px-md-2 {
                    padding-right: 0.25rem !important;
                }
                .pb-md-2,
                .py-md-2 {
                    padding-bottom: 0.25rem !important;
                }
                .pl-md-2,
                .px-md-2 {
                    padding-left: 0.25rem !important;
                }
                .p-md-2-5 {
                    padding: 0.5rem !important;
                }
                .pt-md-2-5,
                .py-md-2-5 {
                    padding-top: 0.5rem !important;
                }
                .pr-md-2-5,
                .px-md-2-5 {
                    padding-right: 0.5rem !important;
                }
                .pb-md-2-5,
                .py-md-2-5 {
                    padding-bottom: 0.5rem !important;
                }
                .pl-md-2-5,
                .px-md-2-5 {
                    padding-left: 0.5rem !important;
                }
                .p-md-3 {
                    padding: 0.75rem !important;
                }
                .pt-md-3,
                .py-md-3 {
                    padding-top: 0.75rem !important;
                }
                .pr-md-3,
                .px-md-3 {
                    padding-right: 0.75rem !important;
                }
                .pb-md-3,
                .py-md-3 {
                    padding-bottom: 0.75rem !important;
                }
                .pl-md-3,
                .px-md-3 {
                    padding-left: 0.75rem !important;
                }
                .p-md-4 {
                    padding: 1rem !important;
                }
                .pt-md-4,
                .py-md-4 {
                    padding-top: 1rem !important;
                }
                .pr-md-4,
                .px-md-4 {
                    padding-right: 1rem !important;
                }
                .pb-md-4,
                .py-md-4 {
                    padding-bottom: 1rem !important;
                }
                .pl-md-4,
                .px-md-4 {
                    padding-left: 1rem !important;
                }
                .p-md-5 {
                    padding: 1.25rem !important;
                }
                .pt-md-5,
                .py-md-5 {
                    padding-top: 1.25rem !important;
                }
                .pr-md-5,
                .px-md-5 {
                    padding-right: 1.25rem !important;
                }
                .pb-md-5,
                .py-md-5 {
                    padding-bottom: 1.25rem !important;
                }
                .pl-md-5,
                .px-md-5 {
                    padding-left: 1.25rem !important;
                }
                .p-md-5-5 {
                    padding: 1.5rem !important;
                }
                .pt-md-5-5,
                .py-md-5-5 {
                    padding-top: 1.5rem !important;
                }
                .pr-md-5-5,
                .px-md-5-5 {
                    padding-right: 1.5rem !important;
                }
                .pb-md-5-5,
                .py-md-5-5 {
                    padding-bottom: 1.5rem !important;
                }
                .pl-md-5-5,
                .px-md-5-5 {
                    padding-left: 1.5rem !important;
                }
                .p-md-6 {
                    padding: 2rem !important;
                }
                .pt-md-6,
                .py-md-6 {
                    padding-top: 2rem !important;
                }
                .pr-md-6,
                .px-md-6 {
                    padding-right: 2rem !important;
                }
                .pb-md-6,
                .py-md-6 {
                    padding-bottom: 2rem !important;
                }
                .pl-md-6,
                .px-md-6 {
                    padding-left: 2rem !important;
                }
                .p-md-7 {
                    padding: 2.5rem !important;
                }
                .pt-md-7,
                .py-md-7 {
                    padding-top: 2.5rem !important;
                }
                .pr-md-7,
                .px-md-7 {
                    padding-right: 2.5rem !important;
                }
                .pb-md-7,
                .py-md-7 {
                    padding-bottom: 2.5rem !important;
                }
                .pl-md-7,
                .px-md-7 {
                    padding-left: 2.5rem !important;
                }
                .p-md-8 {
                    padding: 3rem !important;
                }
                .pt-md-8,
                .py-md-8 {
                    padding-top: 3rem !important;
                }
                .pr-md-8,
                .px-md-8 {
                    padding-right: 3rem !important;
                }
                .pb-md-8,
                .py-md-8 {
                    padding-bottom: 3rem !important;
                }
                .pl-md-8,
                .px-md-8 {
                    padding-left: 3rem !important;
                }
                .p-md-9 {
                    padding: 5rem !important;
                }
                .pt-md-9,
                .py-md-9 {
                    padding-top: 5rem !important;
                }
                .pr-md-9,
                .px-md-9 {
                    padding-right: 5rem !important;
                }
                .pb-md-9,
                .py-md-9 {
                    padding-bottom: 5rem !important;
                }
                .pl-md-9,
                .px-md-9 {
                    padding-left: 5rem !important;
                }
                .p-md-10 {
                    padding: 7rem !important;
                }
                .pt-md-10,
                .py-md-10 {
                    padding-top: 7rem !important;
                }
                .pr-md-10,
                .px-md-10 {
                    padding-right: 7rem !important;
                }
                .pb-md-10,
                .py-md-10 {
                    padding-bottom: 7rem !important;
                }
                .pl-md-10,
                .px-md-10 {
                    padding-left: 7rem !important;
                }
                .p-md-11 {
                    padding: 9rem !important;
                }
                .pt-md-11,
                .py-md-11 {
                    padding-top: 9rem !important;
                }
                .pr-md-11,
                .px-md-11 {
                    padding-right: 9rem !important;
                }
                .pb-md-11,
                .py-md-11 {
                    padding-bottom: 9rem !important;
                }
                .pl-md-11,
                .px-md-11 {
                    padding-left: 9rem !important;
                }
                .p-md-12 {
                    padding: 12rem !important;
                }
                .pt-md-12,
                .py-md-12 {
                    padding-top: 12rem !important;
                }
                .pr-md-12,
                .px-md-12 {
                    padding-right: 12rem !important;
                }
                .pb-md-12,
                .py-md-12 {
                    padding-bottom: 12rem !important;
                }
                .pl-md-12,
                .px-md-12 {
                    padding-left: 12rem !important;
                }
                .m-md-auto {
                    margin: auto !important;
                }
                .mt-md-auto,
                .my-md-auto {
                    margin-top: auto !important;
                }
                .mr-md-auto,
                .mx-md-auto {
                    margin-right: auto !important;
                }
                .mb-md-auto,
                .my-md-auto {
                    margin-bottom: auto !important;
                }
                .ml-md-auto,
                .mx-md-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1280px) {
                .m-lg-0 {
                    margin: 0 !important;
                }
                .mt-lg-0,
                .my-lg-0 {
                    margin-top: 0 !important;
                }
                .mr-lg-0,
                .mx-lg-0 {
                    margin-right: 0 !important;
                }
                .mb-lg-0,
                .my-lg-0 {
                    margin-bottom: 0 !important;
                }
                .ml-lg-0,
                .mx-lg-0 {
                    margin-left: 0 !important;
                }
                .m-lg-1 {
                    margin: 0.125rem !important;
                }
                .mt-lg-1,
                .my-lg-1 {
                    margin-top: 0.125rem !important;
                }
                .mr-lg-1,
                .mx-lg-1 {
                    margin-right: 0.125rem !important;
                }
                .mb-lg-1,
                .my-lg-1 {
                    margin-bottom: 0.125rem !important;
                }
                .ml-lg-1,
                .mx-lg-1 {
                    margin-left: 0.125rem !important;
                }
                .m-lg-2 {
                    margin: 0.25rem !important;
                }
                .mt-lg-2,
                .my-lg-2 {
                    margin-top: 0.25rem !important;
                }
                .mr-lg-2,
                .mx-lg-2 {
                    margin-right: 0.25rem !important;
                }
                .mb-lg-2,
                .my-lg-2 {
                    margin-bottom: 0.25rem !important;
                }
                .ml-lg-2,
                .mx-lg-2 {
                    margin-left: 0.25rem !important;
                }
                .m-lg-2-5 {
                    margin: 0.5rem !important;
                }
                .mt-lg-2-5,
                .my-lg-2-5 {
                    margin-top: 0.5rem !important;
                }
                .mr-lg-2-5,
                .mx-lg-2-5 {
                    margin-right: 0.5rem !important;
                }
                .mb-lg-2-5,
                .my-lg-2-5 {
                    margin-bottom: 0.5rem !important;
                }
                .ml-lg-2-5,
                .mx-lg-2-5 {
                    margin-left: 0.5rem !important;
                }
                .m-lg-3 {
                    margin: 0.75rem !important;
                }
                .mt-lg-3,
                .my-lg-3 {
                    margin-top: 0.75rem !important;
                }
                .mr-lg-3,
                .mx-lg-3 {
                    margin-right: 0.75rem !important;
                }
                .mb-lg-3,
                .my-lg-3 {
                    margin-bottom: 0.75rem !important;
                }
                .ml-lg-3,
                .mx-lg-3 {
                    margin-left: 0.75rem !important;
                }
                .m-lg-4 {
                    margin: 1rem !important;
                }
                .mt-lg-4,
                .my-lg-4 {
                    margin-top: 1rem !important;
                }
                .mr-lg-4,
                .mx-lg-4 {
                    margin-right: 1rem !important;
                }
                .mb-lg-4,
                .my-lg-4 {
                    margin-bottom: 1rem !important;
                }
                .ml-lg-4,
                .mx-lg-4 {
                    margin-left: 1rem !important;
                }
                .m-lg-5 {
                    margin: 1.25rem !important;
                }
                .mt-lg-5,
                .my-lg-5 {
                    margin-top: 1.25rem !important;
                }
                .mr-lg-5,
                .mx-lg-5 {
                    margin-right: 1.25rem !important;
                }
                .mb-lg-5,
                .my-lg-5 {
                    margin-bottom: 1.25rem !important;
                }
                .ml-lg-5,
                .mx-lg-5 {
                    margin-left: 1.25rem !important;
                }
                .m-lg-5-5 {
                    margin: 1.5rem !important;
                }
                .mt-lg-5-5,
                .my-lg-5-5 {
                    margin-top: 1.5rem !important;
                }
                .mr-lg-5-5,
                .mx-lg-5-5 {
                    margin-right: 1.5rem !important;
                }
                .mb-lg-5-5,
                .my-lg-5-5 {
                    margin-bottom: 1.5rem !important;
                }
                .ml-lg-5-5,
                .mx-lg-5-5 {
                    margin-left: 1.5rem !important;
                }
                .m-lg-6 {
                    margin: 2rem !important;
                }
                .mt-lg-6,
                .my-lg-6 {
                    margin-top: 2rem !important;
                }
                .mr-lg-6,
                .mx-lg-6 {
                    margin-right: 2rem !important;
                }
                .mb-lg-6,
                .my-lg-6 {
                    margin-bottom: 2rem !important;
                }
                .ml-lg-6,
                .mx-lg-6 {
                    margin-left: 2rem !important;
                }
                .m-lg-7 {
                    margin: 2.5rem !important;
                }
                .mt-lg-7,
                .my-lg-7 {
                    margin-top: 2.5rem !important;
                }
                .mr-lg-7,
                .mx-lg-7 {
                    margin-right: 2.5rem !important;
                }
                .mb-lg-7,
                .my-lg-7 {
                    margin-bottom: 2.5rem !important;
                }
                .ml-lg-7,
                .mx-lg-7 {
                    margin-left: 2.5rem !important;
                }
                .m-lg-8 {
                    margin: 3rem !important;
                }
                .mt-lg-8,
                .my-lg-8 {
                    margin-top: 3rem !important;
                }
                .mr-lg-8,
                .mx-lg-8 {
                    margin-right: 3rem !important;
                }
                .mb-lg-8,
                .my-lg-8 {
                    margin-bottom: 3rem !important;
                }
                .ml-lg-8,
                .mx-lg-8 {
                    margin-left: 3rem !important;
                }
                .m-lg-9 {
                    margin: 5rem !important;
                }
                .mt-lg-9,
                .my-lg-9 {
                    margin-top: 5rem !important;
                }
                .mr-lg-9,
                .mx-lg-9 {
                    margin-right: 5rem !important;
                }
                .mb-lg-9,
                .my-lg-9 {
                    margin-bottom: 5rem !important;
                }
                .ml-lg-9,
                .mx-lg-9 {
                    margin-left: 5rem !important;
                }
                .m-lg-10 {
                    margin: 7rem !important;
                }
                .mt-lg-10,
                .my-lg-10 {
                    margin-top: 7rem !important;
                }
                .mr-lg-10,
                .mx-lg-10 {
                    margin-right: 7rem !important;
                }
                .mb-lg-10,
                .my-lg-10 {
                    margin-bottom: 7rem !important;
                }
                .ml-lg-10,
                .mx-lg-10 {
                    margin-left: 7rem !important;
                }
                .m-lg-11 {
                    margin: 9rem !important;
                }
                .mt-lg-11,
                .my-lg-11 {
                    margin-top: 9rem !important;
                }
                .mr-lg-11,
                .mx-lg-11 {
                    margin-right: 9rem !important;
                }
                .mb-lg-11,
                .my-lg-11 {
                    margin-bottom: 9rem !important;
                }
                .ml-lg-11,
                .mx-lg-11 {
                    margin-left: 9rem !important;
                }
                .m-lg-12 {
                    margin: 12rem !important;
                }
                .mt-lg-12,
                .my-lg-12 {
                    margin-top: 12rem !important;
                }
                .mr-lg-12,
                .mx-lg-12 {
                    margin-right: 12rem !important;
                }
                .mb-lg-12,
                .my-lg-12 {
                    margin-bottom: 12rem !important;
                }
                .ml-lg-12,
                .mx-lg-12 {
                    margin-left: 12rem !important;
                }
                .p-lg-0 {
                    padding: 0 !important;
                }
                .pt-lg-0,
                .py-lg-0 {
                    padding-top: 0 !important;
                }
                .pr-lg-0,
                .px-lg-0 {
                    padding-right: 0 !important;
                }
                .pb-lg-0,
                .py-lg-0 {
                    padding-bottom: 0 !important;
                }
                .pl-lg-0,
                .px-lg-0 {
                    padding-left: 0 !important;
                }
                .p-lg-1 {
                    padding: 0.125rem !important;
                }
                .pt-lg-1,
                .py-lg-1 {
                    padding-top: 0.125rem !important;
                }
                .pr-lg-1,
                .px-lg-1 {
                    padding-right: 0.125rem !important;
                }
                .pb-lg-1,
                .py-lg-1 {
                    padding-bottom: 0.125rem !important;
                }
                .pl-lg-1,
                .px-lg-1 {
                    padding-left: 0.125rem !important;
                }
                .p-lg-2 {
                    padding: 0.25rem !important;
                }
                .pt-lg-2,
                .py-lg-2 {
                    padding-top: 0.25rem !important;
                }
                .pr-lg-2,
                .px-lg-2 {
                    padding-right: 0.25rem !important;
                }
                .pb-lg-2,
                .py-lg-2 {
                    padding-bottom: 0.25rem !important;
                }
                .pl-lg-2,
                .px-lg-2 {
                    padding-left: 0.25rem !important;
                }
                .p-lg-2-5 {
                    padding: 0.5rem !important;
                }
                .pt-lg-2-5,
                .py-lg-2-5 {
                    padding-top: 0.5rem !important;
                }
                .pr-lg-2-5,
                .px-lg-2-5 {
                    padding-right: 0.5rem !important;
                }
                .pb-lg-2-5,
                .py-lg-2-5 {
                    padding-bottom: 0.5rem !important;
                }
                .pl-lg-2-5,
                .px-lg-2-5 {
                    padding-left: 0.5rem !important;
                }
                .p-lg-3 {
                    padding: 0.75rem !important;
                }
                .pt-lg-3,
                .py-lg-3 {
                    padding-top: 0.75rem !important;
                }
                .pr-lg-3,
                .px-lg-3 {
                    padding-right: 0.75rem !important;
                }
                .pb-lg-3,
                .py-lg-3 {
                    padding-bottom: 0.75rem !important;
                }
                .pl-lg-3,
                .px-lg-3 {
                    padding-left: 0.75rem !important;
                }
                .p-lg-4 {
                    padding: 1rem !important;
                }
                .pt-lg-4,
                .py-lg-4 {
                    padding-top: 1rem !important;
                }
                .pr-lg-4,
                .px-lg-4 {
                    padding-right: 1rem !important;
                }
                .pb-lg-4,
                .py-lg-4 {
                    padding-bottom: 1rem !important;
                }
                .pl-lg-4,
                .px-lg-4 {
                    padding-left: 1rem !important;
                }
                .p-lg-5 {
                    padding: 1.25rem !important;
                }
                .pt-lg-5,
                .py-lg-5 {
                    padding-top: 1.25rem !important;
                }
                .pr-lg-5,
                .px-lg-5 {
                    padding-right: 1.25rem !important;
                }
                .pb-lg-5,
                .py-lg-5 {
                    padding-bottom: 1.25rem !important;
                }
                .pl-lg-5,
                .px-lg-5 {
                    padding-left: 1.25rem !important;
                }
                .p-lg-5-5 {
                    padding: 1.5rem !important;
                }
                .pt-lg-5-5,
                .py-lg-5-5 {
                    padding-top: 1.5rem !important;
                }
                .pr-lg-5-5,
                .px-lg-5-5 {
                    padding-right: 1.5rem !important;
                }
                .pb-lg-5-5,
                .py-lg-5-5 {
                    padding-bottom: 1.5rem !important;
                }
                .pl-lg-5-5,
                .px-lg-5-5 {
                    padding-left: 1.5rem !important;
                }
                .p-lg-6 {
                    padding: 2rem !important;
                }
                .pt-lg-6,
                .py-lg-6 {
                    padding-top: 2rem !important;
                }
                .pr-lg-6,
                .px-lg-6 {
                    padding-right: 2rem !important;
                }
                .pb-lg-6,
                .py-lg-6 {
                    padding-bottom: 2rem !important;
                }
                .pl-lg-6,
                .px-lg-6 {
                    padding-left: 2rem !important;
                }
                .p-lg-7 {
                    padding: 2.5rem !important;
                }
                .pt-lg-7,
                .py-lg-7 {
                    padding-top: 2.5rem !important;
                }
                .pr-lg-7,
                .px-lg-7 {
                    padding-right: 2.5rem !important;
                }
                .pb-lg-7,
                .py-lg-7 {
                    padding-bottom: 2.5rem !important;
                }
                .pl-lg-7,
                .px-lg-7 {
                    padding-left: 2.5rem !important;
                }
                .p-lg-8 {
                    padding: 3rem !important;
                }
                .pt-lg-8,
                .py-lg-8 {
                    padding-top: 3rem !important;
                }
                .pr-lg-8,
                .px-lg-8 {
                    padding-right: 3rem !important;
                }
                .pb-lg-8,
                .py-lg-8 {
                    padding-bottom: 3rem !important;
                }
                .pl-lg-8,
                .px-lg-8 {
                    padding-left: 3rem !important;
                }
                .p-lg-9 {
                    padding: 5rem !important;
                }
                .pt-lg-9,
                .py-lg-9 {
                    padding-top: 5rem !important;
                }
                .pr-lg-9,
                .px-lg-9 {
                    padding-right: 5rem !important;
                }
                .pb-lg-9,
                .py-lg-9 {
                    padding-bottom: 5rem !important;
                }
                .pl-lg-9,
                .px-lg-9 {
                    padding-left: 5rem !important;
                }
                .p-lg-10 {
                    padding: 7rem !important;
                }
                .pt-lg-10,
                .py-lg-10 {
                    padding-top: 7rem !important;
                }
                .pr-lg-10,
                .px-lg-10 {
                    padding-right: 7rem !important;
                }
                .pb-lg-10,
                .py-lg-10 {
                    padding-bottom: 7rem !important;
                }
                .pl-lg-10,
                .px-lg-10 {
                    padding-left: 7rem !important;
                }
                .p-lg-11 {
                    padding: 9rem !important;
                }
                .pt-lg-11,
                .py-lg-11 {
                    padding-top: 9rem !important;
                }
                .pr-lg-11,
                .px-lg-11 {
                    padding-right: 9rem !important;
                }
                .pb-lg-11,
                .py-lg-11 {
                    padding-bottom: 9rem !important;
                }
                .pl-lg-11,
                .px-lg-11 {
                    padding-left: 9rem !important;
                }
                .p-lg-12 {
                    padding: 12rem !important;
                }
                .pt-lg-12,
                .py-lg-12 {
                    padding-top: 12rem !important;
                }
                .pr-lg-12,
                .px-lg-12 {
                    padding-right: 12rem !important;
                }
                .pb-lg-12,
                .py-lg-12 {
                    padding-bottom: 12rem !important;
                }
                .pl-lg-12,
                .px-lg-12 {
                    padding-left: 12rem !important;
                }
                .m-lg-auto {
                    margin: auto !important;
                }
                .mt-lg-auto,
                .my-lg-auto {
                    margin-top: auto !important;
                }
                .mr-lg-auto,
                .mx-lg-auto {
                    margin-right: auto !important;
                }
                .mb-lg-auto,
                .my-lg-auto {
                    margin-bottom: auto !important;
                }
                .ml-lg-auto,
                .mx-lg-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1400px) {
                .m-xl-0 {
                    margin: 0 !important;
                }
                .mt-xl-0,
                .my-xl-0 {
                    margin-top: 0 !important;
                }
                .mr-xl-0,
                .mx-xl-0 {
                    margin-right: 0 !important;
                }
                .mb-xl-0,
                .my-xl-0 {
                    margin-bottom: 0 !important;
                }
                .ml-xl-0,
                .mx-xl-0 {
                    margin-left: 0 !important;
                }
                .m-xl-1 {
                    margin: 0.125rem !important;
                }
                .mt-xl-1,
                .my-xl-1 {
                    margin-top: 0.125rem !important;
                }
                .mr-xl-1,
                .mx-xl-1 {
                    margin-right: 0.125rem !important;
                }
                .mb-xl-1,
                .my-xl-1 {
                    margin-bottom: 0.125rem !important;
                }
                .ml-xl-1,
                .mx-xl-1 {
                    margin-left: 0.125rem !important;
                }
                .m-xl-2 {
                    margin: 0.25rem !important;
                }
                .mt-xl-2,
                .my-xl-2 {
                    margin-top: 0.25rem !important;
                }
                .mr-xl-2,
                .mx-xl-2 {
                    margin-right: 0.25rem !important;
                }
                .mb-xl-2,
                .my-xl-2 {
                    margin-bottom: 0.25rem !important;
                }
                .ml-xl-2,
                .mx-xl-2 {
                    margin-left: 0.25rem !important;
                }
                .m-xl-2-5 {
                    margin: 0.5rem !important;
                }
                .mt-xl-2-5,
                .my-xl-2-5 {
                    margin-top: 0.5rem !important;
                }
                .mr-xl-2-5,
                .mx-xl-2-5 {
                    margin-right: 0.5rem !important;
                }
                .mb-xl-2-5,
                .my-xl-2-5 {
                    margin-bottom: 0.5rem !important;
                }
                .ml-xl-2-5,
                .mx-xl-2-5 {
                    margin-left: 0.5rem !important;
                }
                .m-xl-3 {
                    margin: 0.75rem !important;
                }
                .mt-xl-3,
                .my-xl-3 {
                    margin-top: 0.75rem !important;
                }
                .mr-xl-3,
                .mx-xl-3 {
                    margin-right: 0.75rem !important;
                }
                .mb-xl-3,
                .my-xl-3 {
                    margin-bottom: 0.75rem !important;
                }
                .ml-xl-3,
                .mx-xl-3 {
                    margin-left: 0.75rem !important;
                }
                .m-xl-4 {
                    margin: 1rem !important;
                }
                .mt-xl-4,
                .my-xl-4 {
                    margin-top: 1rem !important;
                }
                .mr-xl-4,
                .mx-xl-4 {
                    margin-right: 1rem !important;
                }
                .mb-xl-4,
                .my-xl-4 {
                    margin-bottom: 1rem !important;
                }
                .ml-xl-4,
                .mx-xl-4 {
                    margin-left: 1rem !important;
                }
                .m-xl-5 {
                    margin: 1.25rem !important;
                }
                .mt-xl-5,
                .my-xl-5 {
                    margin-top: 1.25rem !important;
                }
                .mr-xl-5,
                .mx-xl-5 {
                    margin-right: 1.25rem !important;
                }
                .mb-xl-5,
                .my-xl-5 {
                    margin-bottom: 1.25rem !important;
                }
                .ml-xl-5,
                .mx-xl-5 {
                    margin-left: 1.25rem !important;
                }
                .m-xl-5-5 {
                    margin: 1.5rem !important;
                }
                .mt-xl-5-5,
                .my-xl-5-5 {
                    margin-top: 1.5rem !important;
                }
                .mr-xl-5-5,
                .mx-xl-5-5 {
                    margin-right: 1.5rem !important;
                }
                .mb-xl-5-5,
                .my-xl-5-5 {
                    margin-bottom: 1.5rem !important;
                }
                .ml-xl-5-5,
                .mx-xl-5-5 {
                    margin-left: 1.5rem !important;
                }
                .m-xl-6 {
                    margin: 2rem !important;
                }
                .mt-xl-6,
                .my-xl-6 {
                    margin-top: 2rem !important;
                }
                .mr-xl-6,
                .mx-xl-6 {
                    margin-right: 2rem !important;
                }
                .mb-xl-6,
                .my-xl-6 {
                    margin-bottom: 2rem !important;
                }
                .ml-xl-6,
                .mx-xl-6 {
                    margin-left: 2rem !important;
                }
                .m-xl-7 {
                    margin: 2.5rem !important;
                }
                .mt-xl-7,
                .my-xl-7 {
                    margin-top: 2.5rem !important;
                }
                .mr-xl-7,
                .mx-xl-7 {
                    margin-right: 2.5rem !important;
                }
                .mb-xl-7,
                .my-xl-7 {
                    margin-bottom: 2.5rem !important;
                }
                .ml-xl-7,
                .mx-xl-7 {
                    margin-left: 2.5rem !important;
                }
                .m-xl-8 {
                    margin: 3rem !important;
                }
                .mt-xl-8,
                .my-xl-8 {
                    margin-top: 3rem !important;
                }
                .mr-xl-8,
                .mx-xl-8 {
                    margin-right: 3rem !important;
                }
                .mb-xl-8,
                .my-xl-8 {
                    margin-bottom: 3rem !important;
                }
                .ml-xl-8,
                .mx-xl-8 {
                    margin-left: 3rem !important;
                }
                .m-xl-9 {
                    margin: 5rem !important;
                }
                .mt-xl-9,
                .my-xl-9 {
                    margin-top: 5rem !important;
                }
                .mr-xl-9,
                .mx-xl-9 {
                    margin-right: 5rem !important;
                }
                .mb-xl-9,
                .my-xl-9 {
                    margin-bottom: 5rem !important;
                }
                .ml-xl-9,
                .mx-xl-9 {
                    margin-left: 5rem !important;
                }
                .m-xl-10 {
                    margin: 7rem !important;
                }
                .mt-xl-10,
                .my-xl-10 {
                    margin-top: 7rem !important;
                }
                .mr-xl-10,
                .mx-xl-10 {
                    margin-right: 7rem !important;
                }
                .mb-xl-10,
                .my-xl-10 {
                    margin-bottom: 7rem !important;
                }
                .ml-xl-10,
                .mx-xl-10 {
                    margin-left: 7rem !important;
                }
                .m-xl-11 {
                    margin: 9rem !important;
                }
                .mt-xl-11,
                .my-xl-11 {
                    margin-top: 9rem !important;
                }
                .mr-xl-11,
                .mx-xl-11 {
                    margin-right: 9rem !important;
                }
                .mb-xl-11,
                .my-xl-11 {
                    margin-bottom: 9rem !important;
                }
                .ml-xl-11,
                .mx-xl-11 {
                    margin-left: 9rem !important;
                }
                .m-xl-12 {
                    margin: 12rem !important;
                }
                .mt-xl-12,
                .my-xl-12 {
                    margin-top: 12rem !important;
                }
                .mr-xl-12,
                .mx-xl-12 {
                    margin-right: 12rem !important;
                }
                .mb-xl-12,
                .my-xl-12 {
                    margin-bottom: 12rem !important;
                }
                .ml-xl-12,
                .mx-xl-12 {
                    margin-left: 12rem !important;
                }
                .p-xl-0 {
                    padding: 0 !important;
                }
                .pt-xl-0,
                .py-xl-0 {
                    padding-top: 0 !important;
                }
                .pr-xl-0,
                .px-xl-0 {
                    padding-right: 0 !important;
                }
                .pb-xl-0,
                .py-xl-0 {
                    padding-bottom: 0 !important;
                }
                .pl-xl-0,
                .px-xl-0 {
                    padding-left: 0 !important;
                }
                .p-xl-1 {
                    padding: 0.125rem !important;
                }
                .pt-xl-1,
                .py-xl-1 {
                    padding-top: 0.125rem !important;
                }
                .pr-xl-1,
                .px-xl-1 {
                    padding-right: 0.125rem !important;
                }
                .pb-xl-1,
                .py-xl-1 {
                    padding-bottom: 0.125rem !important;
                }
                .pl-xl-1,
                .px-xl-1 {
                    padding-left: 0.125rem !important;
                }
                .p-xl-2 {
                    padding: 0.25rem !important;
                }
                .pt-xl-2,
                .py-xl-2 {
                    padding-top: 0.25rem !important;
                }
                .pr-xl-2,
                .px-xl-2 {
                    padding-right: 0.25rem !important;
                }
                .pb-xl-2,
                .py-xl-2 {
                    padding-bottom: 0.25rem !important;
                }
                .pl-xl-2,
                .px-xl-2 {
                    padding-left: 0.25rem !important;
                }
                .p-xl-2-5 {
                    padding: 0.5rem !important;
                }
                .pt-xl-2-5,
                .py-xl-2-5 {
                    padding-top: 0.5rem !important;
                }
                .pr-xl-2-5,
                .px-xl-2-5 {
                    padding-right: 0.5rem !important;
                }
                .pb-xl-2-5,
                .py-xl-2-5 {
                    padding-bottom: 0.5rem !important;
                }
                .pl-xl-2-5,
                .px-xl-2-5 {
                    padding-left: 0.5rem !important;
                }
                .p-xl-3 {
                    padding: 0.75rem !important;
                }
                .pt-xl-3,
                .py-xl-3 {
                    padding-top: 0.75rem !important;
                }
                .pr-xl-3,
                .px-xl-3 {
                    padding-right: 0.75rem !important;
                }
                .pb-xl-3,
                .py-xl-3 {
                    padding-bottom: 0.75rem !important;
                }
                .pl-xl-3,
                .px-xl-3 {
                    padding-left: 0.75rem !important;
                }
                .p-xl-4 {
                    padding: 1rem !important;
                }
                .pt-xl-4,
                .py-xl-4 {
                    padding-top: 1rem !important;
                }
                .pr-xl-4,
                .px-xl-4 {
                    padding-right: 1rem !important;
                }
                .pb-xl-4,
                .py-xl-4 {
                    padding-bottom: 1rem !important;
                }
                .pl-xl-4,
                .px-xl-4 {
                    padding-left: 1rem !important;
                }
                .p-xl-5 {
                    padding: 1.25rem !important;
                }
                .pt-xl-5,
                .py-xl-5 {
                    padding-top: 1.25rem !important;
                }
                .pr-xl-5,
                .px-xl-5 {
                    padding-right: 1.25rem !important;
                }
                .pb-xl-5,
                .py-xl-5 {
                    padding-bottom: 1.25rem !important;
                }
                .pl-xl-5,
                .px-xl-5 {
                    padding-left: 1.25rem !important;
                }
                .p-xl-5-5 {
                    padding: 1.5rem !important;
                }
                .pt-xl-5-5,
                .py-xl-5-5 {
                    padding-top: 1.5rem !important;
                }
                .pr-xl-5-5,
                .px-xl-5-5 {
                    padding-right: 1.5rem !important;
                }
                .pb-xl-5-5,
                .py-xl-5-5 {
                    padding-bottom: 1.5rem !important;
                }
                .pl-xl-5-5,
                .px-xl-5-5 {
                    padding-left: 1.5rem !important;
                }
                .p-xl-6 {
                    padding: 2rem !important;
                }
                .pt-xl-6,
                .py-xl-6 {
                    padding-top: 2rem !important;
                }
                .pr-xl-6,
                .px-xl-6 {
                    padding-right: 2rem !important;
                }
                .pb-xl-6,
                .py-xl-6 {
                    padding-bottom: 2rem !important;
                }
                .pl-xl-6,
                .px-xl-6 {
                    padding-left: 2rem !important;
                }
                .p-xl-7 {
                    padding: 2.5rem !important;
                }
                .pt-xl-7,
                .py-xl-7 {
                    padding-top: 2.5rem !important;
                }
                .pr-xl-7,
                .px-xl-7 {
                    padding-right: 2.5rem !important;
                }
                .pb-xl-7,
                .py-xl-7 {
                    padding-bottom: 2.5rem !important;
                }
                .pl-xl-7,
                .px-xl-7 {
                    padding-left: 2.5rem !important;
                }
                .p-xl-8 {
                    padding: 3rem !important;
                }
                .pt-xl-8,
                .py-xl-8 {
                    padding-top: 3rem !important;
                }
                .pr-xl-8,
                .px-xl-8 {
                    padding-right: 3rem !important;
                }
                .pb-xl-8,
                .py-xl-8 {
                    padding-bottom: 3rem !important;
                }
                .pl-xl-8,
                .px-xl-8 {
                    padding-left: 3rem !important;
                }
                .p-xl-9 {
                    padding: 5rem !important;
                }
                .pt-xl-9,
                .py-xl-9 {
                    padding-top: 5rem !important;
                }
                .pr-xl-9,
                .px-xl-9 {
                    padding-right: 5rem !important;
                }
                .pb-xl-9,
                .py-xl-9 {
                    padding-bottom: 5rem !important;
                }
                .pl-xl-9,
                .px-xl-9 {
                    padding-left: 5rem !important;
                }
                .p-xl-10 {
                    padding: 7rem !important;
                }
                .pt-xl-10,
                .py-xl-10 {
                    padding-top: 7rem !important;
                }
                .pr-xl-10,
                .px-xl-10 {
                    padding-right: 7rem !important;
                }
                .pb-xl-10,
                .py-xl-10 {
                    padding-bottom: 7rem !important;
                }
                .pl-xl-10,
                .px-xl-10 {
                    padding-left: 7rem !important;
                }
                .p-xl-11 {
                    padding: 9rem !important;
                }
                .pt-xl-11,
                .py-xl-11 {
                    padding-top: 9rem !important;
                }
                .pr-xl-11,
                .px-xl-11 {
                    padding-right: 9rem !important;
                }
                .pb-xl-11,
                .py-xl-11 {
                    padding-bottom: 9rem !important;
                }
                .pl-xl-11,
                .px-xl-11 {
                    padding-left: 9rem !important;
                }
                .p-xl-12 {
                    padding: 12rem !important;
                }
                .pt-xl-12,
                .py-xl-12 {
                    padding-top: 12rem !important;
                }
                .pr-xl-12,
                .px-xl-12 {
                    padding-right: 12rem !important;
                }
                .pb-xl-12,
                .py-xl-12 {
                    padding-bottom: 12rem !important;
                }
                .pl-xl-12,
                .px-xl-12 {
                    padding-left: 12rem !important;
                }
                .m-xl-auto {
                    margin: auto !important;
                }
                .mt-xl-auto,
                .my-xl-auto {
                    margin-top: auto !important;
                }
                .mr-xl-auto,
                .mx-xl-auto {
                    margin-right: auto !important;
                }
                .mb-xl-auto,
                .my-xl-auto {
                    margin-bottom: auto !important;
                }
                .ml-xl-auto,
                .mx-xl-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1800px) {
                .m-xxl-0 {
                    margin: 0 !important;
                }
                .mt-xxl-0,
                .my-xxl-0 {
                    margin-top: 0 !important;
                }
                .mr-xxl-0,
                .mx-xxl-0 {
                    margin-right: 0 !important;
                }
                .mb-xxl-0,
                .my-xxl-0 {
                    margin-bottom: 0 !important;
                }
                .ml-xxl-0,
                .mx-xxl-0 {
                    margin-left: 0 !important;
                }
                .m-xxl-1 {
                    margin: 0.125rem !important;
                }
                .mt-xxl-1,
                .my-xxl-1 {
                    margin-top: 0.125rem !important;
                }
                .mr-xxl-1,
                .mx-xxl-1 {
                    margin-right: 0.125rem !important;
                }
                .mb-xxl-1,
                .my-xxl-1 {
                    margin-bottom: 0.125rem !important;
                }
                .ml-xxl-1,
                .mx-xxl-1 {
                    margin-left: 0.125rem !important;
                }
                .m-xxl-2 {
                    margin: 0.25rem !important;
                }
                .mt-xxl-2,
                .my-xxl-2 {
                    margin-top: 0.25rem !important;
                }
                .mr-xxl-2,
                .mx-xxl-2 {
                    margin-right: 0.25rem !important;
                }
                .mb-xxl-2,
                .my-xxl-2 {
                    margin-bottom: 0.25rem !important;
                }
                .ml-xxl-2,
                .mx-xxl-2 {
                    margin-left: 0.25rem !important;
                }
                .m-xxl-2-5 {
                    margin: 0.5rem !important;
                }
                .mt-xxl-2-5,
                .my-xxl-2-5 {
                    margin-top: 0.5rem !important;
                }
                .mr-xxl-2-5,
                .mx-xxl-2-5 {
                    margin-right: 0.5rem !important;
                }
                .mb-xxl-2-5,
                .my-xxl-2-5 {
                    margin-bottom: 0.5rem !important;
                }
                .ml-xxl-2-5,
                .mx-xxl-2-5 {
                    margin-left: 0.5rem !important;
                }
                .m-xxl-3 {
                    margin: 0.75rem !important;
                }
                .mt-xxl-3,
                .my-xxl-3 {
                    margin-top: 0.75rem !important;
                }
                .mr-xxl-3,
                .mx-xxl-3 {
                    margin-right: 0.75rem !important;
                }
                .mb-xxl-3,
                .my-xxl-3 {
                    margin-bottom: 0.75rem !important;
                }
                .ml-xxl-3,
                .mx-xxl-3 {
                    margin-left: 0.75rem !important;
                }
                .m-xxl-4 {
                    margin: 1rem !important;
                }
                .mt-xxl-4,
                .my-xxl-4 {
                    margin-top: 1rem !important;
                }
                .mr-xxl-4,
                .mx-xxl-4 {
                    margin-right: 1rem !important;
                }
                .mb-xxl-4,
                .my-xxl-4 {
                    margin-bottom: 1rem !important;
                }
                .ml-xxl-4,
                .mx-xxl-4 {
                    margin-left: 1rem !important;
                }
                .m-xxl-5 {
                    margin: 1.25rem !important;
                }
                .mt-xxl-5,
                .my-xxl-5 {
                    margin-top: 1.25rem !important;
                }
                .mr-xxl-5,
                .mx-xxl-5 {
                    margin-right: 1.25rem !important;
                }
                .mb-xxl-5,
                .my-xxl-5 {
                    margin-bottom: 1.25rem !important;
                }
                .ml-xxl-5,
                .mx-xxl-5 {
                    margin-left: 1.25rem !important;
                }
                .m-xxl-5-5 {
                    margin: 1.5rem !important;
                }
                .mt-xxl-5-5,
                .my-xxl-5-5 {
                    margin-top: 1.5rem !important;
                }
                .mr-xxl-5-5,
                .mx-xxl-5-5 {
                    margin-right: 1.5rem !important;
                }
                .mb-xxl-5-5,
                .my-xxl-5-5 {
                    margin-bottom: 1.5rem !important;
                }
                .ml-xxl-5-5,
                .mx-xxl-5-5 {
                    margin-left: 1.5rem !important;
                }
                .m-xxl-6 {
                    margin: 2rem !important;
                }
                .mt-xxl-6,
                .my-xxl-6 {
                    margin-top: 2rem !important;
                }
                .mr-xxl-6,
                .mx-xxl-6 {
                    margin-right: 2rem !important;
                }
                .mb-xxl-6,
                .my-xxl-6 {
                    margin-bottom: 2rem !important;
                }
                .ml-xxl-6,
                .mx-xxl-6 {
                    margin-left: 2rem !important;
                }
                .m-xxl-7 {
                    margin: 2.5rem !important;
                }
                .mt-xxl-7,
                .my-xxl-7 {
                    margin-top: 2.5rem !important;
                }
                .mr-xxl-7,
                .mx-xxl-7 {
                    margin-right: 2.5rem !important;
                }
                .mb-xxl-7,
                .my-xxl-7 {
                    margin-bottom: 2.5rem !important;
                }
                .ml-xxl-7,
                .mx-xxl-7 {
                    margin-left: 2.5rem !important;
                }
                .m-xxl-8 {
                    margin: 3rem !important;
                }
                .mt-xxl-8,
                .my-xxl-8 {
                    margin-top: 3rem !important;
                }
                .mr-xxl-8,
                .mx-xxl-8 {
                    margin-right: 3rem !important;
                }
                .mb-xxl-8,
                .my-xxl-8 {
                    margin-bottom: 3rem !important;
                }
                .ml-xxl-8,
                .mx-xxl-8 {
                    margin-left: 3rem !important;
                }
                .m-xxl-9 {
                    margin: 5rem !important;
                }
                .mt-xxl-9,
                .my-xxl-9 {
                    margin-top: 5rem !important;
                }
                .mr-xxl-9,
                .mx-xxl-9 {
                    margin-right: 5rem !important;
                }
                .mb-xxl-9,
                .my-xxl-9 {
                    margin-bottom: 5rem !important;
                }
                .ml-xxl-9,
                .mx-xxl-9 {
                    margin-left: 5rem !important;
                }
                .m-xxl-10 {
                    margin: 7rem !important;
                }
                .mt-xxl-10,
                .my-xxl-10 {
                    margin-top: 7rem !important;
                }
                .mr-xxl-10,
                .mx-xxl-10 {
                    margin-right: 7rem !important;
                }
                .mb-xxl-10,
                .my-xxl-10 {
                    margin-bottom: 7rem !important;
                }
                .ml-xxl-10,
                .mx-xxl-10 {
                    margin-left: 7rem !important;
                }
                .m-xxl-11 {
                    margin: 9rem !important;
                }
                .mt-xxl-11,
                .my-xxl-11 {
                    margin-top: 9rem !important;
                }
                .mr-xxl-11,
                .mx-xxl-11 {
                    margin-right: 9rem !important;
                }
                .mb-xxl-11,
                .my-xxl-11 {
                    margin-bottom: 9rem !important;
                }
                .ml-xxl-11,
                .mx-xxl-11 {
                    margin-left: 9rem !important;
                }
                .m-xxl-12 {
                    margin: 12rem !important;
                }
                .mt-xxl-12,
                .my-xxl-12 {
                    margin-top: 12rem !important;
                }
                .mr-xxl-12,
                .mx-xxl-12 {
                    margin-right: 12rem !important;
                }
                .mb-xxl-12,
                .my-xxl-12 {
                    margin-bottom: 12rem !important;
                }
                .ml-xxl-12,
                .mx-xxl-12 {
                    margin-left: 12rem !important;
                }
                .p-xxl-0 {
                    padding: 0 !important;
                }
                .pt-xxl-0,
                .py-xxl-0 {
                    padding-top: 0 !important;
                }
                .pr-xxl-0,
                .px-xxl-0 {
                    padding-right: 0 !important;
                }
                .pb-xxl-0,
                .py-xxl-0 {
                    padding-bottom: 0 !important;
                }
                .pl-xxl-0,
                .px-xxl-0 {
                    padding-left: 0 !important;
                }
                .p-xxl-1 {
                    padding: 0.125rem !important;
                }
                .pt-xxl-1,
                .py-xxl-1 {
                    padding-top: 0.125rem !important;
                }
                .pr-xxl-1,
                .px-xxl-1 {
                    padding-right: 0.125rem !important;
                }
                .pb-xxl-1,
                .py-xxl-1 {
                    padding-bottom: 0.125rem !important;
                }
                .pl-xxl-1,
                .px-xxl-1 {
                    padding-left: 0.125rem !important;
                }
                .p-xxl-2 {
                    padding: 0.25rem !important;
                }
                .pt-xxl-2,
                .py-xxl-2 {
                    padding-top: 0.25rem !important;
                }
                .pr-xxl-2,
                .px-xxl-2 {
                    padding-right: 0.25rem !important;
                }
                .pb-xxl-2,
                .py-xxl-2 {
                    padding-bottom: 0.25rem !important;
                }
                .pl-xxl-2,
                .px-xxl-2 {
                    padding-left: 0.25rem !important;
                }
                .p-xxl-2-5 {
                    padding: 0.5rem !important;
                }
                .pt-xxl-2-5,
                .py-xxl-2-5 {
                    padding-top: 0.5rem !important;
                }
                .pr-xxl-2-5,
                .px-xxl-2-5 {
                    padding-right: 0.5rem !important;
                }
                .pb-xxl-2-5,
                .py-xxl-2-5 {
                    padding-bottom: 0.5rem !important;
                }
                .pl-xxl-2-5,
                .px-xxl-2-5 {
                    padding-left: 0.5rem !important;
                }
                .p-xxl-3 {
                    padding: 0.75rem !important;
                }
                .pt-xxl-3,
                .py-xxl-3 {
                    padding-top: 0.75rem !important;
                }
                .pr-xxl-3,
                .px-xxl-3 {
                    padding-right: 0.75rem !important;
                }
                .pb-xxl-3,
                .py-xxl-3 {
                    padding-bottom: 0.75rem !important;
                }
                .pl-xxl-3,
                .px-xxl-3 {
                    padding-left: 0.75rem !important;
                }
                .p-xxl-4 {
                    padding: 1rem !important;
                }
                .pt-xxl-4,
                .py-xxl-4 {
                    padding-top: 1rem !important;
                }
                .pr-xxl-4,
                .px-xxl-4 {
                    padding-right: 1rem !important;
                }
                .pb-xxl-4,
                .py-xxl-4 {
                    padding-bottom: 1rem !important;
                }
                .pl-xxl-4,
                .px-xxl-4 {
                    padding-left: 1rem !important;
                }
                .p-xxl-5 {
                    padding: 1.25rem !important;
                }
                .pt-xxl-5,
                .py-xxl-5 {
                    padding-top: 1.25rem !important;
                }
                .pr-xxl-5,
                .px-xxl-5 {
                    padding-right: 1.25rem !important;
                }
                .pb-xxl-5,
                .py-xxl-5 {
                    padding-bottom: 1.25rem !important;
                }
                .pl-xxl-5,
                .px-xxl-5 {
                    padding-left: 1.25rem !important;
                }
                .p-xxl-5-5 {
                    padding: 1.5rem !important;
                }
                .pt-xxl-5-5,
                .py-xxl-5-5 {
                    padding-top: 1.5rem !important;
                }
                .pr-xxl-5-5,
                .px-xxl-5-5 {
                    padding-right: 1.5rem !important;
                }
                .pb-xxl-5-5,
                .py-xxl-5-5 {
                    padding-bottom: 1.5rem !important;
                }
                .pl-xxl-5-5,
                .px-xxl-5-5 {
                    padding-left: 1.5rem !important;
                }
                .p-xxl-6 {
                    padding: 2rem !important;
                }
                .pt-xxl-6,
                .py-xxl-6 {
                    padding-top: 2rem !important;
                }
                .pr-xxl-6,
                .px-xxl-6 {
                    padding-right: 2rem !important;
                }
                .pb-xxl-6,
                .py-xxl-6 {
                    padding-bottom: 2rem !important;
                }
                .pl-xxl-6,
                .px-xxl-6 {
                    padding-left: 2rem !important;
                }
                .p-xxl-7 {
                    padding: 2.5rem !important;
                }
                .pt-xxl-7,
                .py-xxl-7 {
                    padding-top: 2.5rem !important;
                }
                .pr-xxl-7,
                .px-xxl-7 {
                    padding-right: 2.5rem !important;
                }
                .pb-xxl-7,
                .py-xxl-7 {
                    padding-bottom: 2.5rem !important;
                }
                .pl-xxl-7,
                .px-xxl-7 {
                    padding-left: 2.5rem !important;
                }
                .p-xxl-8 {
                    padding: 3rem !important;
                }
                .pt-xxl-8,
                .py-xxl-8 {
                    padding-top: 3rem !important;
                }
                .pr-xxl-8,
                .px-xxl-8 {
                    padding-right: 3rem !important;
                }
                .pb-xxl-8,
                .py-xxl-8 {
                    padding-bottom: 3rem !important;
                }
                .pl-xxl-8,
                .px-xxl-8 {
                    padding-left: 3rem !important;
                }
                .p-xxl-9 {
                    padding: 5rem !important;
                }
                .pt-xxl-9,
                .py-xxl-9 {
                    padding-top: 5rem !important;
                }
                .pr-xxl-9,
                .px-xxl-9 {
                    padding-right: 5rem !important;
                }
                .pb-xxl-9,
                .py-xxl-9 {
                    padding-bottom: 5rem !important;
                }
                .pl-xxl-9,
                .px-xxl-9 {
                    padding-left: 5rem !important;
                }
                .p-xxl-10 {
                    padding: 7rem !important;
                }
                .pt-xxl-10,
                .py-xxl-10 {
                    padding-top: 7rem !important;
                }
                .pr-xxl-10,
                .px-xxl-10 {
                    padding-right: 7rem !important;
                }
                .pb-xxl-10,
                .py-xxl-10 {
                    padding-bottom: 7rem !important;
                }
                .pl-xxl-10,
                .px-xxl-10 {
                    padding-left: 7rem !important;
                }
                .p-xxl-11 {
                    padding: 9rem !important;
                }
                .pt-xxl-11,
                .py-xxl-11 {
                    padding-top: 9rem !important;
                }
                .pr-xxl-11,
                .px-xxl-11 {
                    padding-right: 9rem !important;
                }
                .pb-xxl-11,
                .py-xxl-11 {
                    padding-bottom: 9rem !important;
                }
                .pl-xxl-11,
                .px-xxl-11 {
                    padding-left: 9rem !important;
                }
                .p-xxl-12 {
                    padding: 12rem !important;
                }
                .pt-xxl-12,
                .py-xxl-12 {
                    padding-top: 12rem !important;
                }
                .pr-xxl-12,
                .px-xxl-12 {
                    padding-right: 12rem !important;
                }
                .pb-xxl-12,
                .py-xxl-12 {
                    padding-bottom: 12rem !important;
                }
                .pl-xxl-12,
                .px-xxl-12 {
                    padding-left: 12rem !important;
                }
                .m-xxl-auto {
                    margin: auto !important;
                }
                .mt-xxl-auto,
                .my-xxl-auto {
                    margin-top: auto !important;
                }
                .mr-xxl-auto,
                .mx-xxl-auto {
                    margin-right: auto !important;
                }
                .mb-xxl-auto,
                .my-xxl-auto {
                    margin-bottom: auto !important;
                }
                .ml-xxl-auto,
                .mx-xxl-auto {
                    margin-left: auto !important;
                }
            }
            .text-justify {
                text-align: justify !important;
            }
            .text-nowrap {
                white-space: nowrap !important;
            }
            .text-truncate {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .text-left {
                text-align: left !important;
            }
            .text-right {
                text-align: right !important;
            }
            .text-center {
                text-align: center !important;
            }
            @media (min-width: 576px) {
                .text-sm-left {
                    text-align: left !important;
                }
                .text-sm-right {
                    text-align: right !important;
                }
                .text-sm-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 1024px) {
                .text-md-left {
                    text-align: left !important;
                }
                .text-md-right {
                    text-align: right !important;
                }
                .text-md-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 1280px) {
                .text-lg-left {
                    text-align: left !important;
                }
                .text-lg-right {
                    text-align: right !important;
                }
                .text-lg-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 1400px) {
                .text-xl-left {
                    text-align: left !important;
                }
                .text-xl-right {
                    text-align: right !important;
                }
                .text-xl-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 1800px) {
                .text-xxl-left {
                    text-align: left !important;
                }
                .text-xxl-right {
                    text-align: right !important;
                }
                .text-xxl-center {
                    text-align: center !important;
                }
            }
            .text-lowercase {
                text-transform: lowercase !important;
            }
            .text-uppercase {
                text-transform: uppercase !important;
            }
            .text-capitalize {
                text-transform: capitalize !important;
            }
            .font-weight-normal {
                font-weight: 400 !important;
            }
            .font-weight-semi-bold {
                font-weight: 500 !important;
            }
            .font-weight-bold {
                font-weight: 700 !important;
            }
            .font-italic {
                font-style: italic !important;
            }
            .text-underline {
                text-decoration: underline !important;
            }
            .text-white {
                color: #fff !important;
            }
            .text-white svg {
                vertical-align: middle;
            }
            .text-white svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            a.text-white svg {
                vertical-align: middle;
            }
            a.text-white svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            a.text-white:focus,
            a.text-white:hover {
                color: #e6e6e6 !important;
            }
            .text-primary {
                color: #66f !important;
            }
            .text-primary svg {
                vertical-align: middle;
            }
            .text-primary svg [fill-rule="nonzero"] {
                fill: #66f;
            }
            a.text-primary svg {
                vertical-align: middle;
            }
            a.text-primary svg [fill-rule="nonzero"] {
                fill: #66f;
            }
            a.text-primary:focus,
            a.text-primary:hover {
                color: #33f !important;
            }
            .text-secondary {
                color: #596080 !important;
            }
            .text-secondary svg {
                vertical-align: middle;
            }
            .text-secondary svg [fill-rule="nonzero"] {
                fill: #596080;
            }
            a.text-secondary svg {
                vertical-align: middle;
            }
            a.text-secondary svg [fill-rule="nonzero"] {
                fill: #596080;
            }
            a.text-secondary:focus,
            a.text-secondary:hover {
                color: #444962 !important;
            }
            .text-success {
                color: #24a8af !important;
            }
            .text-success svg {
                vertical-align: middle;
            }
            .text-success svg [fill-rule="nonzero"] {
                fill: #24a8af;
            }
            a.text-success svg {
                vertical-align: middle;
            }
            a.text-success svg [fill-rule="nonzero"] {
                fill: #24a8af;
            }
            a.text-success:focus,
            a.text-success:hover {
                color: #1b7f85 !important;
            }
            .text-info {
                color: #55afe7 !important;
            }
            .text-info svg {
                vertical-align: middle;
            }
            .text-info svg [fill-rule="nonzero"] {
                fill: #55afe7;
            }
            a.text-info svg {
                vertical-align: middle;
            }
            a.text-info svg [fill-rule="nonzero"] {
                fill: #55afe7;
            }
            a.text-info:focus,
            a.text-info:hover {
                color: #289ae1 !important;
            }
            .text-warning {
                color: #e7b549 !important;
            }
            .text-warning svg {
                vertical-align: middle;
            }
            .text-warning svg [fill-rule="nonzero"] {
                fill: #e7b549;
            }
            a.text-warning svg {
                vertical-align: middle;
            }
            a.text-warning svg [fill-rule="nonzero"] {
                fill: #e7b549;
            }
            a.text-warning:focus,
            a.text-warning:hover {
                color: #e0a21d !important;
            }
            .text-danger {
                color: #de524c !important;
            }
            .text-danger svg {
                vertical-align: middle;
            }
            .text-danger svg [fill-rule="nonzero"] {
                fill: #de524c;
            }
            a.text-danger svg {
                vertical-align: middle;
            }
            a.text-danger svg [fill-rule="nonzero"] {
                fill: #de524c;
            }
            a.text-danger:focus,
            a.text-danger:hover {
                color: #d12d26 !important;
            }
            .text-light {
                color: #fafafc !important;
            }
            .text-light svg {
                vertical-align: middle;
            }
            .text-light svg [fill-rule="nonzero"] {
                fill: #fafafc;
            }
            a.text-light svg {
                vertical-align: middle;
            }
            a.text-light svg [fill-rule="nonzero"] {
                fill: #fafafc;
            }
            a.text-light:focus,
            a.text-light:hover {
                color: #dadae9 !important;
            }
            .text-dark {
                color: #1c2033 !important;
            }
            .text-dark svg {
                vertical-align: middle;
            }
            .text-dark svg [fill-rule="nonzero"] {
                fill: #1c2033;
            }
            a.text-dark svg {
                vertical-align: middle;
            }
            a.text-dark svg [fill-rule="nonzero"] {
                fill: #1c2033;
            }
            a.text-dark:focus,
            a.text-dark:hover {
                color: #0a0b12 !important;
            }
            .text-body {
                color: #1c2033 !important;
            }
            .text-body svg {
                vertical-align: middle;
            }
            .text-body svg [fill-rule="nonzero"] {
                fill: #1c2033;
            }
            a.text-body svg {
                vertical-align: middle;
            }
            a.text-body svg [fill-rule="nonzero"] {
                fill: #1c2033;
            }
            a.text-body:focus,
            a.text-body:hover {
                color: #0a0b12 !important;
            }
            .text-cyan {
                color: #55afe7 !important;
            }
            .text-cyan svg {
                vertical-align: middle;
            }
            .text-cyan svg [fill-rule="nonzero"] {
                fill: #55afe7;
            }
            a.text-cyan svg {
                vertical-align: middle;
            }
            a.text-cyan svg [fill-rule="nonzero"] {
                fill: #55afe7;
            }
            a.text-cyan:focus,
            a.text-cyan:hover {
                color: #289ae1 !important;
            }
            .text-facebook {
                color: #3b5998 !important;
            }
            .text-facebook svg {
                vertical-align: middle;
            }
            .text-facebook svg [fill-rule="nonzero"] {
                fill: #3b5998;
            }
            a.text-facebook svg {
                vertical-align: middle;
            }
            a.text-facebook svg [fill-rule="nonzero"] {
                fill: #3b5998;
            }
            a.text-facebook:focus,
            a.text-facebook:hover {
                color: #2d4373 !important;
            }
            .text-twitter {
                color: #1da1f2 !important;
            }
            .text-twitter svg {
                vertical-align: middle;
            }
            .text-twitter svg [fill-rule="nonzero"] {
                fill: #1da1f2;
            }
            a.text-twitter svg {
                vertical-align: middle;
            }
            a.text-twitter svg [fill-rule="nonzero"] {
                fill: #1da1f2;
            }
            a.text-twitter:focus,
            a.text-twitter:hover {
                color: #0c85d0 !important;
            }
            .text-linkedin {
                color: #0077b5 !important;
            }
            .text-linkedin svg {
                vertical-align: middle;
            }
            .text-linkedin svg [fill-rule="nonzero"] {
                fill: #0077b5;
            }
            a.text-linkedin svg {
                vertical-align: middle;
            }
            a.text-linkedin svg [fill-rule="nonzero"] {
                fill: #0077b5;
            }
            a.text-linkedin:focus,
            a.text-linkedin:hover {
                color: #005582 !important;
            }
            .text-google-plus {
                color: #dd4b39 !important;
            }
            .text-google-plus svg {
                vertical-align: middle;
            }
            .text-google-plus svg [fill-rule="nonzero"] {
                fill: #dd4b39;
            }
            a.text-google-plus svg {
                vertical-align: middle;
            }
            a.text-google-plus svg [fill-rule="nonzero"] {
                fill: #dd4b39;
            }
            a.text-google-plus:focus,
            a.text-google-plus:hover {
                color: #c23321 !important;
            }
            .text-pinterest {
                color: #bd081c !important;
            }
            .text-pinterest svg {
                vertical-align: middle;
            }
            .text-pinterest svg [fill-rule="nonzero"] {
                fill: #bd081c;
            }
            a.text-pinterest svg {
                vertical-align: middle;
            }
            a.text-pinterest svg [fill-rule="nonzero"] {
                fill: #bd081c;
            }
            a.text-pinterest:focus,
            a.text-pinterest:hover {
                color: #8c0615 !important;
            }
            .text-muted {
                color: #8f95b3 !important;
            }
            .visible {
                visibility: visible !important;
            }
            .invisible {
                visibility: hidden !important;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .o50 {
                opacity: 0.5;
            }
            .o75 {
                opacity: 0.75;
            }
            .disabled-inside {
                pointer-events: none;
            }
            .disabled-inside > :not(header) {
                opacity: 0.5;
            }
            .o60 {
                opacity: 0.6;
            }
            .dropdown.dropleft .dropdown-toggle.dropdown-toggle-no-caret:before,
            .dropdown:not(.dropleft) .dropdown-toggle.dropdown-toggle-no-caret:after {
                display: none !important;
            }
            .dropdown .dropdown-menu:focus {
                outline: none;
            }
            .b-dropdown-form {
                display: inline-block;
                padding: 0.25rem 0.75rem;
                width: 100%;
                clear: both;
                font-weight: 400;
            }
            .b-dropdown-form:focus {
                outline: 1px dotted !important;
                outline: 5px auto -webkit-focus-ring-color !important;
            }
            .b-dropdown-form.disabled,
            .b-dropdown-form:disabled {
                outline: 0 !important;
                color: #737999;
                pointer-events: none;
            }
            .b-dropdown-text {
                display: inline-block;
                padding: 0.25rem 0.75rem;
                margin-bottom: 0;
                width: 100%;
                clear: both;
                font-weight: 400;
            }
            .input-group > .input-group-append:last-child > .btn-group:not(:last-child):not(.dropdown-toggle) > .btn,
            .input-group > .input-group-append:not(:last-child) > .btn-group > .btn,
            .input-group > .input-group-prepend > .btn-group > .btn {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .input-group > .input-group-append > .btn-group > .btn,
            .input-group > .input-group-prepend:first-child > .btn-group:not(:first-child) > .btn,
            .input-group > .input-group-prepend:not(:first-child) > .btn-group > .btn {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .modal-backdrop {
                opacity: 0.7;
            }
            .b-sidebar-outer {
                right: 0;
                height: 0;
                overflow: visible;
                z-index: 1035;
            }
            .b-sidebar-backdrop,
            .b-sidebar-outer {
                position: fixed !important;
                top: 0;
                left: 0;
            }
            .b-sidebar-backdrop {
                z-index: -1;
                width: 100vw;
                height: 100vh;
                opacity: 0.6;
            }
            .b-sidebar {
                display: flex;
                flex-direction: column;
                position: fixed !important;
                top: 0;
                height: 100vh;
                width: 320px;
                max-width: 100% !important;
                height: 100vh !important;
                margin: 0 !important;
                outline: 0;
                transform: translateX(0);
            }
            .b-sidebar.slide {
                transition: transform 0.3s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                .b-sidebar.slide {
                    transition: none;
                }
            }
            .b-sidebar:not(.b-sidebar-right) {
                left: 0;
                right: auto;
            }
            .b-sidebar:not(.b-sidebar-right).slide:not(.show) {
                transform: translateX(-100%);
            }
            .b-sidebar:not(.b-sidebar-right) > .b-sidebar-header .close {
                margin-left: auto;
            }
            .b-sidebar.b-sidebar-right {
                left: auto;
                right: 0;
            }
            .b-sidebar.b-sidebar-right.slide:not(.show) {
                transform: translateX(100%);
            }
            .b-sidebar.b-sidebar-right > .b-sidebar-header .close {
                margin-right: auto;
            }
            .b-sidebar > .b-sidebar-header {
                font-size: 1.5rem;
                padding: 1.5rem 0;
                display: flex;
                flex-direction: row;
                flex-grow: 0;
                align-items: center;
            }
            [dir="rtl"] .b-sidebar > .b-sidebar-header {
                flex-direction: row-reverse;
            }
            .b-sidebar > .b-sidebar-header .close {
                float: none;
                font-size: 1.5rem;
            }
            .b-sidebar > .b-sidebar-body {
                flex-grow: 1;
                height: 100%;
                overflow-y: auto;
            }
            .b-sidebar > .b-sidebar-footer {
                flex-grow: 0;
            }
            .b-toast .toast {
                background-color: #000;
            }
            .b-toast:not(:last-child) {
                margin-bottom: 1.2rem;
            }
            .b-toast-primary .toast {
                background-color: #fafaff;
                border-color: #d4d4ff;
                color: #353585;
            }
            .b-toast-primary .toast .toast-header {
                color: #353585;
                background-color: #e0e0ff;
                border-bottom-color: #d4d4ff;
            }
            .b-toast-secondary .toast {
                background-color: #ededf1;
                border-color: #d1d2db;
                color: #2e3243;
            }
            .b-toast-secondary .toast .toast-header {
                color: #2e3243;
                background-color: #dedfe6;
                border-bottom-color: #d1d2db;
            }
            .b-toast-success .toast {
                background-color: #e6f5f6;
                border-color: #c2e7e9;
                color: #13575b;
            }
            .b-toast-success .toast .toast-header {
                color: #13575b;
                background-color: #d3eeef;
                border-bottom-color: #c2e7e9;
            }
            .b-toast-info .toast {
                background-color: #f3f9fd;
                border-color: #cfe9f8;
                color: #2c5b78;
            }
            .b-toast-info .toast .toast-header {
                color: #2c5b78;
                background-color: #ddeffa;
                border-bottom-color: #cfe9f8;
            }
            .b-toast-warning .toast {
                background-color: #fdf9f1;
                border-color: #f8eacc;
                color: #785e26;
            }
            .b-toast-warning .toast .toast-header {
                color: #785e26;
                background-color: #faf0db;
                border-bottom-color: #f8eacc;
            }
            .b-toast-danger .toast {
                background-color: #fcf1f0;
                border-color: #f6cfcd;
                color: #732b28;
            }
            .b-toast-danger .toast .toast-header {
                color: #732b28;
                background-color: #f8dcdb;
                border-bottom-color: #f6cfcd;
            }
            .b-toast-light .toast {
                background-color: #fff;
                border-color: #fefefe;
                color: #828283;
            }
            .b-toast-light .toast .toast-header {
                color: #828283;
                background-color: #fefefe;
                border-bottom-color: #fefefe;
            }
            .b-toast-dark .toast {
                background-color: #dfdfe2;
                border-color: #bfc1c6;
                color: #0f111b;
            }
            .b-toast-dark .toast .toast-header {
                color: #0f111b;
                background-color: #d2d2d6;
                border-bottom-color: #bfc1c6;
            }
            .b-toast-body .toast {
                background-color: #dfdfe2;
                border-color: #bfc1c6;
                color: #0f111b;
            }
            .b-toast-body .toast .toast-header {
                color: #0f111b;
                background-color: #d2d2d6;
                border-bottom-color: #bfc1c6;
            }
            .b-toast-cyan .toast {
                background-color: #f3f9fd;
                border-color: #cfe9f8;
                color: #2c5b78;
            }
            .b-toast-cyan .toast .toast-header {
                color: #2c5b78;
                background-color: #ddeffa;
                border-bottom-color: #cfe9f8;
            }
            .b-toaster {
                z-index: 1100;
            }
            .b-toaster .b-toaster-slot {
                position: relative;
                display: block;
            }
            .b-toaster .b-toaster-slot:empty {
                display: none !important;
            }
            .b-toaster.b-toaster-bottom-center,
            .b-toaster.b-toaster-bottom-full,
            .b-toaster.b-toaster-bottom-left,
            .b-toaster.b-toaster-bottom-right,
            .b-toaster.b-toaster-top-center,
            .b-toaster.b-toaster-top-full,
            .b-toaster.b-toaster-top-left,
            .b-toaster.b-toaster-top-right {
                position: fixed;
                left: 0.5rem;
                right: 0.5rem;
                margin: 0;
                padding: 0;
                height: 0;
                overflow: visible;
            }
            .b-toaster.b-toaster-bottom-center .b-toaster-slot,
            .b-toaster.b-toaster-bottom-full .b-toaster-slot,
            .b-toaster.b-toaster-bottom-left .b-toaster-slot,
            .b-toaster.b-toaster-bottom-right .b-toaster-slot,
            .b-toaster.b-toaster-top-center .b-toaster-slot,
            .b-toaster.b-toaster-top-full .b-toaster-slot,
            .b-toaster.b-toaster-top-left .b-toaster-slot,
            .b-toaster.b-toaster-top-right .b-toaster-slot {
                position: absolute;
                max-width: 1054px;
                width: 100%;
                left: 0;
                right: 0;
                padding: 0;
                margin: 0;
            }
            .b-toaster.b-toaster-bottom-full .b-toaster-slot,
            .b-toaster.b-toaster-bottom-full .b-toaster-slot .b-toast,
            .b-toaster.b-toaster-bottom-full .b-toaster-slot .toast,
            .b-toaster.b-toaster-top-full .b-toaster-slot,
            .b-toaster.b-toaster-top-full .b-toaster-slot .b-toast,
            .b-toaster.b-toaster-top-full .b-toaster-slot .toast {
                width: 100%;
                max-width: 100%;
            }
            .b-toaster.b-toaster-top-center,
            .b-toaster.b-toaster-top-full,
            .b-toaster.b-toaster-top-left,
            .b-toaster.b-toaster-top-right {
                top: 0;
            }
            .b-toaster.b-toaster-top-center .b-toaster-slot,
            .b-toaster.b-toaster-top-full .b-toaster-slot,
            .b-toaster.b-toaster-top-left .b-toaster-slot,
            .b-toaster.b-toaster-top-right .b-toaster-slot {
                top: 0.5rem;
            }
            .b-toaster.b-toaster-bottom-center,
            .b-toaster.b-toaster-bottom-full,
            .b-toaster.b-toaster-bottom-left,
            .b-toaster.b-toaster-bottom-right {
                bottom: 0;
            }
            .b-toaster.b-toaster-bottom-center .b-toaster-slot,
            .b-toaster.b-toaster-bottom-full .b-toaster-slot,
            .b-toaster.b-toaster-bottom-left .b-toaster-slot,
            .b-toaster.b-toaster-bottom-right .b-toaster-slot {
                bottom: 0.5rem;
            }
            .b-toaster.b-toaster-bottom-center .b-toaster-slot,
            .b-toaster.b-toaster-bottom-right .b-toaster-slot,
            .b-toaster.b-toaster-top-center .b-toaster-slot,
            .b-toaster.b-toaster-top-right .b-toaster-slot {
                margin-left: auto;
            }
            .b-toaster.b-toaster-bottom-center .b-toaster-slot,
            .b-toaster.b-toaster-bottom-left .b-toaster-slot,
            .b-toaster.b-toaster-top-center .b-toaster-slot,
            .b-toaster.b-toaster-top-left .b-toaster-slot {
                margin-right: auto;
            }
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-active,
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-move,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-active,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-move,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-active,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-move,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-active,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-move {
                transition: transform 0.175s;
            }
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-active .toast.fade,
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-to .toast.fade,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-active .toast.fade,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-to .toast.fade,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-active .toast.fade,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-to .toast.fade,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-active .toast.fade,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-to .toast.fade {
                transition-delay: 0.175s;
            }
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active {
                position: absolute;
                transition-delay: 0.175s;
            }
            .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active .toast.fade,
            .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active .toast.fade,
            .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active .toast.fade,
            .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active .toast.fade {
                transition-delay: 0s;
            }
            .b-toast {
                display: block;
                position: relative;
                max-width: 1054px;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                background-clip: padding-box;
                box-shadow: 0 10px 20px 0 rgba(28, 32, 51, 0.1);
                z-index: 1;
                border-radius: 8px;
            }
            .b-toast:not(:last-child) {
                margin-bottom: 1.25rem;
            }
            .b-toast.b-toast-solid .toast {
                background-color: #000;
            }
            .b-toast .toast {
                opacity: 1;
            }
            .b-toast .toast.fade:not(.show) {
                opacity: 0;
            }
            .b-toast .toast .toast-body {
                display: block;
            }
            .b-toast-primary .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(53, 53, 133, 0.8);
            }
            .b-toast-primary .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-primary.b-toast-solid .toast {
                background-color: #fafaff;
            }
            .b-toast-secondary .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(46, 50, 67, 0.8);
            }
            .b-toast-secondary .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-secondary.b-toast-solid .toast {
                background-color: #ededf1;
            }
            .b-toast-success .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(19, 87, 91, 0.8);
            }
            .b-toast-success .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-success.b-toast-solid .toast {
                background-color: #e6f5f6;
            }
            .b-toast-info .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(44, 91, 120, 0.8);
            }
            .b-toast-info .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-info.b-toast-solid .toast {
                background-color: #f3f9fd;
            }
            .b-toast-warning .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(120, 94, 38, 0.8);
            }
            .b-toast-warning .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-warning.b-toast-solid .toast {
                background-color: #fdf9f1;
            }
            .b-toast-danger .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(115, 43, 40, 0.8);
            }
            .b-toast-danger .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-danger.b-toast-solid .toast {
                background-color: #fcf1f0;
            }
            .b-toast-light .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(130, 130, 131, 0.8);
            }
            .b-toast-light .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-light.b-toast-solid .toast {
                background-color: #fff;
            }
            .b-toast-dark .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(15, 17, 27, 0.8);
            }
            .b-toast-dark .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-dark.b-toast-solid .toast {
                background-color: #dfdfe2;
            }
            .b-toast-body .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(15, 17, 27, 0.8);
            }
            .b-toast-body .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-body.b-toast-solid .toast {
                background-color: #dfdfe2;
            }
            .b-toast-cyan .toast .toast-header {
                background-color: #000 !important;
                color: #fff !important;
                box-shadow: 0 0 3px rgba(44, 91, 120, 0.8);
            }
            .b-toast-cyan .toast .toast-header .close {
                color: #66f !important;
                font-weight: 500 !important;
                margin-right: 0.75rem;
            }
            .b-toast-cyan.b-toast-solid .toast {
                background-color: #f3f9fd;
            }
            .b-toaster-bottom-center {
                bottom: 2.5rem !important;
            }
            .b-toast-warning .toast-header {
                background: url(https://cdna.iconscout.com/img/42e7c55.svg) no-repeat left 1.2rem center;
                background-size: 30px;
                padding-left: calc(1.2rem + 40px);
            }
            .b-toast-success .toast-header {
                background: url(https://cdna.iconscout.com/img/449f392.svg) no-repeat left 1.2rem center;
                background-size: 30px;
                padding-left: calc(1.2rem + 40px);
            }
            .b-toast-danger .toast-header {
                background: url(https://cdna.iconscout.com/img/79a7455.svg) no-repeat left 1.2rem center;
                background-size: 30px;
                padding-left: calc(1.2rem + 40px);
            }
            img:not([src]),
            img[lazy="loading"],
            img[src=""] {
                opacity: 0;
            }
            @media (max-width: 1023.98px) {
                :root {
                    --font-size-base: 1rem;
                    --font-size-lg: 1.125rem;
                    --font-size-sm: 0.875rem;
                    --font-weight-normal: 400;
                    --font-weight-bold: 700;
                    --font-weight-base: 400;
                    --line-height-base: 1.5rem;
                    --h1-font-size: 3rem;
                    --h2-font-size: 1.5rem;
                    --h3-font-size: 1.25rem;
                    --h4-font-size: 1rem;
                    --h5-font-size: 0.875rem;
                    --h6-font-size: 0.875rem;
                    --h1-line-height: 3.625rem;
                    --h2-line-height: 2rem;
                    --h3-line-height: 1.75rem;
                    --h4-line-height: 1.5rem;
                    --h5-line-height: 1.25rem;
                    --h6-line-height: 1.25rem;
                    --display1-size: 6rem;
                    --display2-size: 5.5rem;
                    --display3-size: 4.5rem;
                    --display4-size: 3rem;
                    --display1-weight: 300;
                    --display2-weight: 300;
                    --display3-weight: 300;
                    --display4-weight: 700;
                    --display-line-height: 1.2;
                    --lead-font-size: 1rem;
                    --lead-font-weight: normal;
                    --lead-line-height: 1.5rem;
                    --small-font-size: 0.85em;
                }
            }
            button[data-balloon] {
                overflow: visible;
            }
            [data-balloon] {
                position: relative;
                cursor: pointer;
            }
            [data-balloon]:after {
                font-weight: 400 !important;
                font-style: normal !important;
                text-shadow: none !important;
                font-size: 0.875rem !important;
                background: #1c2033;
                border-radius: 4px;
                color: #fff;
                content: attr(data-balloon);
                padding: 0.5em 1em;
                white-space: pre-wrap;
            }
            [data-balloon]:after,
            [data-balloon]:before {
                filter: alpha(opactiy=0);
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                -moz-opacity: 0;
                -khtml-opacity: 0;
                opacity: 0;
                pointer-events: none;
                transition: all 0.18s ease-out 0.18s;
                position: absolute;
                z-index: 1070;
            }
            [data-balloon]:before {
                content: "";
            }
            [data-balloon]:hover:after,
            [data-balloon]:hover:before,
            [data-balloon][data-balloon-visible]:after,
            [data-balloon][data-balloon-visible]:before {
                filter: alpha(opactiy=100);
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
                -moz-opacity: 1;
                -khtml-opacity: 1;
                opacity: 1;
                pointer-events: auto;
            }
            [data-balloon]:not([data-balloon-pos]):after {
                bottom: 100%;
                left: 50%;
                margin-bottom: 11px;
                transform: translate(-50%, 10px);
                transform-origin: top;
            }
            [data-balloon]:not([data-balloon-pos]):before {
                bottom: 100%;
                left: 50%;
                margin-bottom: 5px;
                transform: translate(-50%, 10px);
                transform-origin: top;
            }
            [data-balloon]:not([data-balloon-pos]):hover:after,
            [data-balloon]:not([data-balloon-pos]):hover:before,
            [data-balloon]:not([data-balloon-pos])[data-balloon-visible]:after,
            [data-balloon]:not([data-balloon-pos])[data-balloon-visible]:before {
                transform: translate(-50%);
            }
            [data-balloon].font-awesome:after {
                font-family: FontAwesome;
            }
            [data-balloon][data-balloon-break]:after {
                white-space: pre;
            }
            [data-balloon][data-balloon-blunt]:after,
            [data-balloon][data-balloon-blunt]:before {
                transition: none;
            }
            [data-balloon][data-balloon-pos="up"]:after {
                bottom: 100%;
                left: 50%;
                margin-bottom: 11px;
                transform: translate(-50%, 10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up"]:before {
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-top: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M2.658 0h32.004c-6 0-11.627 12.002-16.002 12.002C14.285 12.002 8.594 0 2.658 0z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                bottom: 100%;
                left: 50%;
                margin-bottom: 5px;
                transform: translate(-50%, 10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up"]:hover:after,
            [data-balloon][data-balloon-pos="up"]:hover:before,
            [data-balloon][data-balloon-pos="up"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="up"][data-balloon-visible]:before {
                transform: translate(-50%);
            }
            [data-balloon][data-balloon-pos="up-left"]:after {
                bottom: 100%;
                left: 0;
                margin-bottom: 11px;
                transform: translateY(10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up-left"]:before {
                bottom: 100%;
                left: 5px;
                margin-bottom: 5px;
                transform: translateY(10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up-left"]:hover:after,
            [data-balloon][data-balloon-pos="up-left"]:hover:before,
            [data-balloon][data-balloon-pos="up-left"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="up-left"][data-balloon-visible]:before {
                transform: translate(0);
            }
            [data-balloon][data-balloon-pos="up-right"]:after {
                bottom: 100%;
                right: 0;
                margin-bottom: 11px;
                transform: translateY(10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up-right"]:before {
                bottom: 100%;
                right: 5px;
                margin-bottom: 5px;
                transform: translateY(10px);
                transform-origin: top;
            }
            [data-balloon][data-balloon-pos="up-right"]:hover:after,
            [data-balloon][data-balloon-pos="up-right"]:hover:before,
            [data-balloon][data-balloon-pos="up-right"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="up-right"][data-balloon-visible]:before {
                transform: translate(0);
            }
            [data-balloon][data-balloon-pos="down"]:after {
                left: 50%;
                margin-top: 11px;
                top: 100%;
                transform: translate(-50%, -10px);
            }
            [data-balloon][data-balloon-pos="down"]:before {
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-bottom: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M33.342 12H1.338c6 0 11.627-12.002 16.002-12.002C21.715-.002 27.406 12 33.342 12z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                left: 50%;
                margin-top: 5px;
                top: 100%;
                transform: translate(-50%, -10px);
            }
            [data-balloon][data-balloon-pos="down"]:hover:after,
            [data-balloon][data-balloon-pos="down"]:hover:before,
            [data-balloon][data-balloon-pos="down"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="down"][data-balloon-visible]:before {
                transform: translate(-50%);
            }
            [data-balloon][data-balloon-pos="down-left"]:after {
                left: 0;
                margin-top: 11px;
                top: 100%;
                transform: translateY(-10px);
            }
            [data-balloon][data-balloon-pos="down-left"]:before {
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-bottom: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M33.342 12H1.338c6 0 11.627-12.002 16.002-12.002C21.715-.002 27.406 12 33.342 12z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                left: 5px;
                margin-top: 5px;
                top: 100%;
                transform: translateY(-10px);
            }
            [data-balloon][data-balloon-pos="down-left"]:hover:after,
            [data-balloon][data-balloon-pos="down-left"]:hover:before,
            [data-balloon][data-balloon-pos="down-left"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="down-left"][data-balloon-visible]:before {
                transform: translate(0);
            }
            [data-balloon][data-balloon-pos="down-right"]:after {
                right: 0;
                margin-top: 11px;
                top: 100%;
                transform: translateY(-10px);
            }
            [data-balloon][data-balloon-pos="down-right"]:before {
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-bottom: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M33.342 12H1.338c6 0 11.627-12.002 16.002-12.002C21.715-.002 27.406 12 33.342 12z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                right: 5px;
                margin-top: 5px;
                top: 100%;
                transform: translateY(-10px);
            }
            [data-balloon][data-balloon-pos="down-right"]:hover:after,
            [data-balloon][data-balloon-pos="down-right"]:hover:before,
            [data-balloon][data-balloon-pos="down-right"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="down-right"][data-balloon-visible]:before {
                transform: translate(0);
            }
            [data-balloon][data-balloon-pos="left"]:after {
                margin-right: 11px;
                right: 100%;
                top: 50%;
                transform: translate(10px, -50%);
            }
            [data-balloon][data-balloon-pos="left"]:before {
                border-top: 5px solid transparent;
                border-bottom: 5px solid transparent;
                border-left: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M0 33.342V1.338c0 6 12.002 11.627 12.002 16.002C12.002 21.715 0 27.406 0 33.342z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                margin-right: 5px;
                right: 100%;
                top: 50%;
                transform: translate(10px, -50%);
            }
            [data-balloon][data-balloon-pos="left"]:hover:after,
            [data-balloon][data-balloon-pos="left"]:hover:before,
            [data-balloon][data-balloon-pos="left"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="left"][data-balloon-visible]:before {
                transform: translateY(-50%);
            }
            [data-balloon][data-balloon-pos="right"]:after {
                left: 100%;
                margin-left: 11px;
                top: 50%;
                transform: translate(-10px, -50%);
            }
            [data-balloon][data-balloon-pos="right"]:before {
                border-top: 5px solid transparent;
                border-bottom: 5px solid transparent;
                border-right: 6px solid #1c2033;
                background: no-repeat
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='0' height='0'%3E%3Cpath fill='%231C2033' d='M12 2.658v32.004c0-6-12.002-11.627-12.002-16.002C-.002 14.285 12 8.594 12 2.658z'/%3E%3C/svg%3E");
                background-size: 100% auto;
                width: 0;
                height: 0;
                left: 100%;
                margin-left: 5px;
                top: 50%;
                transform: translate(-10px, -50%);
            }
            [data-balloon][data-balloon-pos="right"]:hover:after,
            [data-balloon][data-balloon-pos="right"]:hover:before,
            [data-balloon][data-balloon-pos="right"][data-balloon-visible]:after,
            [data-balloon][data-balloon-pos="right"][data-balloon-visible]:before {
                transform: translateY(-50%);
            }
            [data-balloon][data-balloon-length="small"]:after {
                white-space: normal;
                width: 80px;
            }
            [data-balloon][data-balloon-length="medium"]:after {
                white-space: normal;
                width: 150px;
            }
            [data-balloon][data-balloon-length="large"]:after {
                white-space: normal;
                width: 260px;
            }
            [data-balloon][data-balloon-length="xlarge"]:after {
                white-space: normal;
                width: 380px;
            }
            @media screen and (max-width: 768px) {
                [data-balloon][data-balloon-length="xlarge"]:after {
                    white-space: normal;
                    width: 90vw;
                }
            }
            [data-balloon][data-balloon-length="fit"]:after {
                white-space: normal;
                width: 100%;
            }
            [data-balloon][data-balloon-wrap="nowrap"]:after {
                white-space: nowrap;
            }
            .styled-scroll ::-webkit-scrollbar {
                width: 5px;
                height: 5px;
            }
            .styled-scroll ::-webkit-scrollbar-track {
                border-radius: 10px;
            }
            .styled-scroll ::-webkit-scrollbar-thumb {
                border-radius: 10px;
                background: rgba(143, 149, 179, 0.4);
            }
            .styled-scroll ::-webkit-scrollbar-thumb:window-inactive {
                background: rgba(143, 149, 179, 0.2);
            }
            .styled-scroll ::-webkit-scrollbar-thumb:hover {
                background: rgba(143, 149, 179, 0.7);
            }
            .styled-scroll ::-webkit-scrollbar-button {
                width: 0;
                height: 0;
            }
            .vb.outside {
                margin-right: -17px;
            }
            .vb.outside > .vb-content {
                padding-right: 17px;
            }
            .vb > .vb-dragger {
                z-index: 5;
                width: 5px;
                right: 0;
            }
            .vb > .vb-dragger > .vb-dragger-styler {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                transform: rotate3d(0, 0, 0, 0);
                transition: background-color 0.22s ease-out, opacity 0.22s ease-out, margin 0.22s ease-out, height 0.22s ease-out;
                background-color: rgba(102, 102, 255, 0.1);
                margin: 5px 5px -5px -5px;
                border-radius: 20px;
                height: calc(100% - 10px);
                display: block;
                opacity: 0;
            }
            .vb:hover > .vb-dragger > .vb-dragger-styler {
                opacity: 1;
            }
            .vb.vb-scrolling-phantom > .vb-dragger > .vb-dragger-styler {
                background-color: rgba(102, 102, 255, 0.3);
            }
            .vb.vb-dragging > .vb-dragger > .vb-dragger-styler,
            .vb > .vb-dragger:hover > .vb-dragger-styler {
                background-color: rgba(102, 102, 255, 0.5);
                margin: 5px 5px -5px -5px;
                height: calc(100% - 10px);
            }
            .vb.vb-dragging-phantom > .vb-dragger > .vb-dragger-styler {
                background-color: rgba(102, 102, 255, 0.5);
            }
            .inputCurrencyContainer {
                position: relative;
            }
            .inputCurrencyContainer .form-control {
                padding-left: 30px;
            }
            .inputCurrencyContainer:before {
                content: "$";
                position: absolute;
                padding: 0.563rem 0 0.563rem 1.188rem;
                border: 1px solid transparent;
                color: #8f95b3;
            }
            .btn-group-toggle > .btn {
                background: #fff;
                color: #596080;
                border-color: #d8dbeb;
                box-shadow: 0 1px 0 0 rgba(28, 32, 51, 0.05);
            }
            .btn-group-toggle.group-equal {
                display: flex;
            }
            .btn-group-toggle.group-equal > .btn {
                width: 100%;
            }
            button.ajax-loading,
            button.ajax-loading-light {
                position: relative;
                color: transparent !important;
            }
            button.ajax-loading-light:before,
            button.ajax-loading:before {
                background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjRweCIgIGhlaWdodD0iMjRweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciIHN0eWxlPSJiYWNrZ3JvdW5kOiBub25lOyI+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgZmlsbD0ibm9uZSIgbmctYXR0ci1zdHJva2U9Int7Y29uZmlnLmNvbG9yfX0iIG5nLWF0dHItc3Ryb2tlLXdpZHRoPSJ7e2NvbmZpZy53aWR0aH19IiBuZy1hdHRyLXI9Int7Y29uZmlnLnJhZGl1c319IiBuZy1hdHRyLXN0cm9rZS1kYXNoYXJyYXk9Int7Y29uZmlnLmRhc2hhcnJheX19IiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTAiIHI9IjQ0IiBzdHJva2UtZGFzaGFycmF5PSIyMDcuMzQ1MTE1MTM2OTI2MzIgNzEuMTE1MDM4Mzc4OTc1NDQiIHRyYW5zZm9ybT0icm90YXRlKDIxNiA1MCA1MCkiPjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIgdHlwZT0icm90YXRlIiBjYWxjTW9kZT0ibGluZWFyIiB2YWx1ZXM9IjAgNTAgNTA7MzYwIDUwIDUwIiBrZXlUaW1lcz0iMDsxIiBkdXI9IjFzIiBiZWdpbj0iMHMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIj48L2FuaW1hdGVUcmFuc2Zvcm0+PC9jaXJjbGU+PC9zdmc+);
                background-repeat: no-repeat;
                background-position: 50%;
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
            }
            button.ajax-loading-light:before {
                background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjRweCIgIGhlaWdodD0iMjRweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciIHN0eWxlPSJiYWNrZ3JvdW5kOiBub25lOyI+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgZmlsbD0ibm9uZSIgbmctYXR0ci1zdHJva2U9Int7Y29uZmlnLmNvbG9yfX0iIG5nLWF0dHItc3Ryb2tlLXdpZHRoPSJ7e2NvbmZpZy53aWR0aH19IiBuZy1hdHRyLXI9Int7Y29uZmlnLnJhZGl1c319IiBuZy1hdHRyLXN0cm9rZS1kYXNoYXJyYXk9Int7Y29uZmlnLmRhc2hhcnJheX19IiBzdHJva2U9IiNEMkQ5RTYiIHN0cm9rZS13aWR0aD0iMTAiIHI9IjQ0IiBzdHJva2UtZGFzaGFycmF5PSIyMDcuMzQ1MTE1MTM2OTI2MzIgNzEuMTE1MDM4Mzc4OTc1NDQiIHRyYW5zZm9ybT0icm90YXRlKDIxNiA1MCA1MCkiPjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIgdHlwZT0icm90YXRlIiBjYWxjTW9kZT0ibGluZWFyIiB2YWx1ZXM9IjAgNTAgNTA7MzYwIDUwIDUwIiBrZXlUaW1lcz0iMDsxIiBkdXI9IjFzIiBiZWdpbj0iMHMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIj48L2FuaW1hdGVUcmFuc2Zvcm0+PC9jaXJjbGU+PC9zdmc+);
            }
            .resultsLoading {
                background-color: #fff;
            }
            .resultsLoading.item.icon.small {
                background-color: #ebedf5;
                background-image: linear-gradient(90deg, #fff, transparent 0, transparent 87px, #fff 0, #fff), linear-gradient(0deg, #fff, transparent 0, transparent 114px, #fff 0, #fff);
                background-size: 117px 144px;
                background-position: 0 0, 0 -30px;
                height: 432px;
            }
            .resultsLoading.item.icon.large {
                background-color: #ebedf5;
                background-image: linear-gradient(90deg, #fff, transparent 0, transparent 150px, #fff 0, #fff), linear-gradient(0deg, #fff, transparent 0, transparent 150px, #fff 0, #fff);
                background-size: 152px 152px;
                background-position: 0 0, 0 -2px;
                height: 456px;
            }
            .resultsLoading.item.\33 d,
            .resultsLoading.item.illustration,
            .resultsLoading.item.photo {
                background-color: #ebedf5;
                background-image: linear-gradient(90deg, #fff, transparent 0, transparent 376px, #fff 0, #fff), linear-gradient(0deg, #fff, transparent 0, transparent 250px, #fff 0, #fff);
                background-size: 382px 256px;
                background-position: 0 0, 0 -6px;
                height: 768px;
            }
            .resultsLoading.pack {
                background-color: #ebedf5;
                background-image: linear-gradient(90deg, #fff, transparent 0, transparent 320px, #fff 0, #fff), linear-gradient(0deg, #fff, transparent 0, transparent 270px, #fff 0, #fff);
                background-size: 340px 290px;
                background-position: 0 0, 0 -20px;
                height: 870px;
            }
            .modalTypeButtons .modal-header {
                padding: 2.5rem 2.5rem 2rem;
            }
            .modalTypeButtons .modal-header .close {
                height: 34px;
                width: 34px;
                border-radius: 17px;
                background-color: #fafafc;
            }
            .modalTypeButtons .modal-title {
                margin: 0;
                font-size: 1.5rem;
            }
            .modalTypeButtons .modal-body {
                padding: 2rem 2.5rem;
            }
            .modalTypeButtons .modal-footer {
                padding: 2rem 2.5rem 2.5rem;
            }
            .modalTypeButtons.titleCenter .modal-title {
                flex: 0 0 100%;
                text-align: center;
            }
            .modalTypeButtons.noBorder .modal-header {
                padding-bottom: 0;
                border-bottom: 0;
            }
            .modalTypeButtons.noBorder .modal-footer {
                padding-top: 0;
                border-top: 0;
            }
            .modalAuth .modal-dialog {
                max-width: 650px;
            }
            .modalAuth .modal-content {
                border-radius: 4px;
            }
            .modalAuth .modal-header {
                border-bottom: 0;
                padding: 2rem;
                justify-content: center !important;
                text-align: center;
            }
            .modalAuth .modal-body {
                padding: 0 2rem 1rem;
            }
            .modalAuth .modal-footer {
                padding: 2rem;
                background-color: #fafafc;
                justify-content: center !important;
            }
            .vsm-menu {
                -webkit-perspective: 2000px;
                perspective: 2000px;
            }
            .vsm-menu,
            .vsm-menu * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            .vsm-menu .vsm-dropdown {
                position: absolute;
                z-index: 1000;
                left: 0;
                right: 0;
                top: 50px;
                pointer-events: none;
                -webkit-transform: rotateX(-15deg);
                transform: rotateX(-15deg);
                -webkit-transform-origin: 50% -50px;
                transform-origin: 50% -50px;
                opacity: 0;
                will-change: transform, opacity;
                -webkit-transition-property: opacity, -webkit-transform;
                transition-property: opacity, -webkit-transform;
                transition-property: transform, opacity;
                transition-property: transform, opacity, -webkit-transform;
                -webkit-transition-duration: 0.25s;
                transition-duration: 0.25s;
            }
            .vsm-menu.vsm-dropdown-active .vsm-dropdown {
                opacity: 1;
                pointer-events: auto;
                -webkit-transform: none;
                transform: none;
            }
            .vsm-menu.vsm-dropdown-active .vsm-dropdown-section.vsm-active {
                pointer-events: auto;
            }
            .vsm-root {
                padding: 0;
                margin: 0;
            }
            .vsm-section {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                list-style: none;
            }
            .vsm-section_menu a {
                text-decoration: none;
                -webkit-tap-highlight-color: transparent;
            }
            .vsm-section_menu button {
                background: none;
                border: none;
                outline: none;
            }
            .vsm-link {
                display: inline-block;
                height: 50px;
                white-space: nowrap;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                font-size: 17px;
                line-height: 50px;
                font-weight: 500;
                margin: 0;
                padding: 0 10px;
                color: #6772e5;
                -webkit-transition: color 0.1s ease;
                transition: color 0.1s ease;
            }
            .vsm-link.vsm-active,
            .vsm-link:hover {
                color: #32325d;
            }
            .vsm-link > * {
                position: relative;
                display: block;
            }
            .vsm-background,
            .vsm-background-alt {
                position: absolute;
                top: 0;
                left: 0;
                will-change: transform;
                -webkit-transition-property: -webkit-transform;
                transition-property: -webkit-transform;
                transition-property: transform;
                transition-property: transform, -webkit-transform;
                -webkit-transition-duration: 0.25s;
                transition-duration: 0.25s;
            }
            .vsm-background {
                background: #fff;
                border-radius: 4px;
                overflow: hidden;
                -webkit-box-shadow: 0 50px 100px -20px rgba(50, 50, 93, 0.25), 0 30px 60px -30px rgba(0, 0, 0, 0.3), 0 -18px 60px -10px rgba(0, 0, 0, 0.025);
                box-shadow: 0 50px 100px -20px rgba(50, 50, 93, 0.25), 0 30px 60px -30px rgba(0, 0, 0, 0.3), 0 -18px 60px -10px rgba(0, 0, 0, 0.025);
                width: 380px;
                height: 400px;
                -webkit-transform: translateX(0);
                transform: translateX(0);
                -webkit-transform-origin: 0 0;
                transform-origin: 0 0;
            }
            .vsm-background-alt {
                right: 0;
                height: 1000px;
                background: #f6f9fc;
            }
            .vsm-arrow,
            .vsm-dropdown-container {
                position: absolute;
                left: 0;
                -webkit-transition-duration: 0.25s;
                transition-duration: 0.25s;
            }
            .vsm-arrow {
                top: -6px;
                margin: 0 0 0 -6px;
                width: 12px;
                height: 12px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                border-radius: 4px 0 0 0;
                background: #fff;
                -webkit-box-shadow: -3px -3px 5px rgba(82, 95, 127, 0.04);
                box-shadow: -3px -3px 5px rgba(82, 95, 127, 0.04);
                will-change: transform;
                -webkit-transition-property: -webkit-transform;
                transition-property: -webkit-transform;
                transition-property: transform;
                transition-property: transform, -webkit-transform;
                pointer-events: none;
            }
            .vsm-dropdown-container {
                overflow: hidden;
                width: 500px;
                top: 0;
                -webkit-transform: translateX(0);
                transform: translateX(0);
                will-change: transform, width, height;
                border-radius: 6px;
                -webkit-transition-property: width, height, -webkit-transform;
                transition-property: width, height, -webkit-transform;
                transition-property: transform, width, height;
                transition-property: transform, width, height, -webkit-transform;
            }
            .vsm-dropdown-section {
                opacity: 0;
                pointer-events: none;
                will-change: transform, opacity;
                -webkit-transition-property: opacity, -webkit-transform;
                transition-property: opacity, -webkit-transform;
                transition-property: transform, opacity;
                transition-property: transform, opacity, -webkit-transform;
                -webkit-transition-duration: 0.25s;
                transition-duration: 0.25s;
            }
            .vsm-dropdown-section.vsm-active {
                opacity: 1;
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
            .vsm-dropdown-section.vsm-left {
                -webkit-transform: translateX(-150px);
                transform: translateX(-150px);
            }
            .vsm-dropdown-section.vsm-right {
                -webkit-transform: translateX(150px);
                transform: translateX(150px);
            }
            .vsm-dropdown-content {
                position: absolute;
                top: 0;
                left: 0;
            }
            .vsm-section_mob {
                display: none;
                margin-left: 10px;
            }
            .vsm-section_mob.vsm-open .vsm-mob {
                pointer-events: none;
            }
            .vsm-mob__hamburger,
            .vsm-section_mob.vsm-open .vsm-mob-content {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }
            .vsm-mob__hamburger {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                cursor: pointer;
            }
            .vsm-mob__hamburger:hover .vsm-mob-line {
                background: #32325d;
            }
            .vsm-mob-line {
                width: 24px;
                height: 3px;
                background: #6772e5;
                -webkit-transition: background 0.1s ease;
                transition: background 0.1s ease;
            }
            .vsm-mob-line:nth-child(2) {
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .vsm-mob-content {
                position: absolute;
                left: 10px;
                top: 10px;
                right: 10px;
                -webkit-box-pack: end;
                -ms-flex-pack: end;
                justify-content: flex-end;
                -webkit-perspective: 2000px;
                perspective: 2000px;
            }
            .vsm-mob-content__wrap {
                background: #fff;
                -webkit-box-shadow: 0 50px 100px -20px rgba(50, 50, 93, 0.25), 0 30px 60px -30px rgba(0, 0, 0, 0.3), 0 -18px 60px -10px rgba(0, 0, 0, 0.025);
                box-shadow: 0 50px 100px -20px rgba(50, 50, 93, 0.25), 0 30px 60px -30px rgba(0, 0, 0, 0.3), 0 -18px 60px -10px rgba(0, 0, 0, 0.025);
                border-radius: 4px;
                overflow: hidden;
                position: relative;
                font-size: 17px;
                line-height: 40px;
                white-space: nowrap;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-transform-origin: 100% 0;
                transform-origin: 100% 0;
                will-change: transform, opacity;
                -webkit-transition-property: opacity, -webkit-transform;
                transition-property: opacity, -webkit-transform;
                transition-property: transform, opacity;
                transition-property: transform, opacity, -webkit-transform;
                -webkit-transition-duration: 0.25s;
                transition-duration: 0.25s;
            }
            .vsm-mob-close {
                position: absolute;
                right: 0;
                top: 0;
                width: 50px;
                height: 50px;
                cursor: pointer;
            }
            .vsm-mob-close:hover:after,
            .vsm-mob-close:hover:before {
                background: #32325d;
            }
            .vsm-mob-close:after,
            .vsm-mob-close:before {
                content: "";
                position: absolute;
                background: #6772e5;
                border-radius: 1px;
                left: 14px;
                right: 14px;
                top: 24px;
                height: 3px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-transition: background 0.1s ease;
                transition: background 0.1s ease;
            }
            .vsm-mob-close:after {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            .vsm-mob-anim {
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }
            .vsm-mob-anim-enter-active {
                opacity: 0;
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
            }
            .vsm-mob-anim-enter-to {
                opacity: 1;
            }
            .vsm-mob-anim-enter-to,
            .vsm-mob-anim-leave-active,
            .vsm-mob-anim-leave-enter {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            .vsm-mob-anim-leave-to {
                -webkit-transform: scale(0.95);
                transform: scale(0.95);
                opacity: 0;
            }
            .vsm-no-transition .vsm-arrow,
            .vsm-no-transition .vsm-background,
            .vsm-no-transition .vsm-background-alt,
            .vsm-no-transition .vsm-dropdown-container,
            .vsm-no-transition .vsm-dropdown-section {
                -webkit-transition: none;
                transition: none;
            }
            .vsm-has-dropdown {
                cursor: default;
            }
            @media screen and (max-width: 768px) {
                .vsm-section_mob {
                    display: block;
                }
                .vsm-mob-hide {
                    display: none;
                }
                .vsm-mob-full {
                    -webkit-box-flex: 1;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                }
            }
            .nuxt-progress {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 2px;
                width: 0;
                opacity: 1;
                transition: width 0.1s, opacity 0.4s;
                background-color: #66f;
                z-index: 999999;
            }
            .nuxt-progress.nuxt-progress-notransition {
                transition: none;
            }
            .nuxt-progress-failed {
                background-color: red;
            }
            .legal-header {
                height: 235px;
                color: #fff;
                display: flex;
                background-image: url(/assets/images/pages/legal.png);
                background-repeat: no-repeat;
                background-position: 100% 100%;
            }
            @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 2dppx), only screen and (min-resolution: 192dpi) {
                .legal-header {
                    background-image: url(/assets/images/pages/legal@2x.png);
                    background-size: 217px 194px;
                }
            }
            .side_menu {
                padding: 0;
                list-style: none;
            }
            .side_menu > li {
                font-size: 16px;
                line-height: 24px;
                margin-bottom: 15px;
            }
            .side_menu > li > a {
                color: #161a21;
                font-weight: 400;
            }
            .side_menu > li > a.nuxt-link-exact-active {
                color: #577ee8;
                font-weight: 700;
            }
            .content-header {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .content-header small {
                text-transform: uppercase;
            }
            .content {
                margin-bottom: 1.875rem !important;
            }
            .container_ij5bM {
                position: relative;
                z-index: 1020;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08), 0 8px 12px rgba(0, 0, 0, 0.04);
                background: #fff;
            }
            .container_ij5bM.sticky_1THrw {
                background: #fff;
                position: -webkit-sticky;
                position: sticky;
                top: 0;
            }
            .container_ij5bM .vsm-root {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1rem 1.5rem;
            }
            .container_ij5bM .vsm-background {
                box-shadow: 0 6px 12px -4px rgba(0, 0, 0, 0.08), 0 20px 24px -4px rgba(0, 0, 0, 0.12);
            }
            .container_ij5bM .vsm-background .vsm-arrow {
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08), 0 4px 8px rgba(0, 0, 0, 0.04);
            }
            .container_ij5bM .vsm-dropdown {
                top: 76px !important;
            }
            .container_ij5bM .vsm-background,
            .container_ij5bM .vsm-dropdown-container,
            .container_ij5bM .vsm-dropdown-content {
                border-radius: 0 0 12px 12px;
            }
            .container_ij5bM .vsm-section_menu {
                flex-grow: 1;
            }
            .container_ij5bM .vsm-link {
                display: flex;
                align-items: center;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5rem;
                color: #2e334d;
                height: 76px;
                margin-top: -16px;
                margin-bottom: -16px;
                cursor: pointer;
            }
            .container_ij5bM .vsm-link.vsm-active,
            .container_ij5bM .vsm-link:hover {
                text-decoration: none;
                color: #66f;
            }
            .container_ij5bM .pricingLink_3AZa1 {
                color: #000;
            }
            .container_ij5bM .pricingLink_3AZa1:hover {
                text-decoration: none;
                color: #66f;
            }
            .container_ij5bM .search_9wb4p {
                width: 426px;
            }
            @media (max-width: 1399.98px) {
                .container_ij5bM .search_9wb4p {
                    width: 350px;
                }
            }
            .container_ij5bM .mobileSearch_3XcaF {
                position: relative;
                z-index: -1;
            }
            .container_2e2ej .overlay_3ivgP {
                right: 0;
                bottom: 0;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 1040;
            }
            .container_2e2ej .overlay_3ivgP,
            .container_2e2ej .sidebar_1OJkX {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
            }
            .container_2e2ej .sidebar_1OJkX {
                width: 220px;
                flex: 0 0 220px;
                background: #fff;
                z-index: 1050;
                transition: all 0.4s ease-in-out;
            }
            .accountDropdown_1wBLi .btnAccount_3hmOI {
                border-radius: 22px;
                text-decoration: none !important;
            }
            .accountDropdown_1wBLi .btnAccount_3hmOI:after {
                content: "";
                position: absolute;
                display: block;
                height: 6px;
                width: 6px;
                border-right: 2px solid #fff;
                border-bottom: 2px solid #fff;
                transition: 0.22s;
                transform: rotate(45deg);
                right: 5px;
                top: 50%;
                margin-top: -5px;
                pointer-events: none;
            }
            .accountDropdown_1wBLi .btnAccount_3hmOI .profile_3dbzv {
                border-radius: 22px;
                padding: 0.25rem 0;
                background: #ebedf5;
                transition: background 0.3s ease-in-out;
            }
            .accountDropdown_1wBLi .btnAccount_3hmOI .profile_3dbzv:hover {
                background: #d8dbeb;
            }
            .accountDropdown_1wBLi .btnAccount_3hmOI .profile_3dbzv .totalBalance_KIKne {
                color: #000;
                font-weight: 500;
                max-width: 100px;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI {
                width: 332px;
                padding: 2rem 0;
                overflow: hidden;
                z-index: 1060;
                border: none;
                box-shadow: 0 6px 12px -4px rgba(0, 0, 0, 0.08), 0 20px 24px -4px rgba(0, 0, 0, 0.12);
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .boxBtn_c5Ppy {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: #f2f2ff;
                border-radius: 12px;
                height: 96px;
                color: #000;
                box-shadow: none !important;
                transition: background 0.3s ease-in-out;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .boxBtn_c5Ppy:hover {
                text-decoration: none;
                background: #e6e6ff;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .boxBtn_c5Ppy.fav_3j9oj {
                background: #e7f7fe;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .boxBtn_c5Ppy.fav_3j9oj:hover {
                background: #beebfd;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .link_28OdJ {
                font-weight: 400;
                justify-content: flex-start;
                color: #000;
                background: #f5f6fa;
                border-radius: 12px;
                font-size: 0.875rem !important;
                box-shadow: none !important;
                transition: background 0.3s ease-in-out;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .link_28OdJ:hover {
                background: #ebedf5;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .separator_2tBmo {
                border-color: #ebedf5;
            }
            .accountDropdown_1wBLi .dropdownMenu_aRNaI .logout_1nrBg {
                font-size: 0.875rem !important;
                font-weight: 400;
                box-shadow: none !important;
            }
            .container_8Pmvq {
                background: #fff;
                width: 1228px;
                border-radius: 0 0 12px 12px;
            }
            @media (max-width: 1279.98px) {
                .container_8Pmvq {
                    width: -webkit-max-content;
                    width: max-content;
                }
            }
            .container_8Pmvq .image_3GH_4 {
                object-fit: cover;
                border-radius: 8px;
            }
            .container_8Pmvq .link_Lc1I4 {
                color: #000;
                display: block;
            }
            .container_8Pmvq .link_Lc1I4:hover {
                text-decoration: none;
                color: #66f;
            }
            .container_8Pmvq .offer_3EvW7 {
                width: 100%;
                height: auto;
                background: linear-gradient(180deg, #f5f6fa, rgba(245, 246, 250, 0));
            }
            .container_8Pmvq .lottieWrapper_35S1X {
                background: #fff7e6;
                border-radius: 8px;
            }
            .container_1wnUr {
                background: #fff;
                width: 736px;
                border-radius: 0 0 8px 8px;
            }
            .container_1wnUr .plugin_3CDyS:not(:last-child) {
                padding-bottom: 0.5rem;
                padding-right: 0.5rem;
            }
            .container_1wnUr .plugin_3CDyS:last-child {
                padding-right: 0.5rem;
            }
            .container_1wnUr .offer_20WlW {
                min-width: 264px;
                width: 264px;
                height: auto;
                background: linear-gradient(180deg, #f5f6fa, rgba(245, 246, 250, 0));
            }
            .container_1wnUr .pluginLinks_FWhWd {
                background: #f5f6fa;
                font-weight: 400 !important;
                color: #000;
                font-size: 0.875rem;
            }
            .container_1wnUr .pluginLinks_FWhWd:hover {
                background: #ebedf5;
            }
            .container_1wnUr .others_2LLOJ {
                background: #fff;
                font-weight: 400 !important;
                color: #000;
                font-size: 0.875rem;
            }
            .container_1wnUr .others_2LLOJ:hover {
                background: #ebedf5;
            }
            .container_3uCU_ {
                background: #fff;
                width: 210px;
                border-radius: 0 0 8px 8px;
            }
            .container_3uCU_ .link_1bm33 {
                color: #000;
                display: block;
            }
            .container_3uCU_ .link_1bm33:hover {
                text-decoration: none;
                color: #66f;
            }
            .footer_29C-- {
                background-color: #d8dbeb;
                color: #596080;
            }
            .footer_29C-- .icon_3soGH svg {
                vertical-align: middle;
            }
            .footer_29C-- .icon_3soGH svg [fill-rule="nonzero"] {
                fill: #de524c;
            }
            .footer_29C-- .links_3wu7H {
                text-align: right;
            }
            @media (max-width: 1023.98px) {
                .footer_29C-- .links_3wu7H {
                    text-align: left;
                }
            }
            .footer_29C-- .links_3wu7H li:not(:first-child) {
                margin-left: 1rem;
                margin-right: 0;
            }
            @media (max-width: 1023.98px) {
                .footer_29C-- .links_3wu7H li:not(:first-child) {
                    margin-left: 0.75rem;
                }
            }
            .footer_29C-- .links_3wu7H li a {
                color: inherit;
                font-weight: 400;
                font-size: 0.875rem;
            }
            .footerMetaContainer_30vdE {
                font-size: 80%;
                line-height: 1.65;
            }
            .footerMetaContainer_30vdE h1,
            .footerMetaContainer_30vdE h2,
            .footerMetaContainer_30vdE h3,
            .footerMetaContainer_30vdE h4,
            .footerMetaContainer_30vdE h5,
            .footerMetaContainer_30vdE h6 {
                font-size: 1rem;
                line-height: 1.65;
            }
        </style>
        <style type="text/css">
            .dropdown_3ia4Q .dropdownBtn_1o-2V {
                background: #ebedf5 !important;
                border-color: #ebedf5 !important;
            }
            @media (max-width: 1023.98px) {
                .dropdown_3ia4Q .dropdownBtn_1o-2V {
                    font-size: 0.875rem;
                    padding: 0.5rem 0.75rem;
                    max-width: 120px;
                }
            }
            .dropdown_3ia4Q .dropdownBtn_1o-2V:hover {
                background: #d8dbeb !important;
                border-color: #d8dbeb !important;
            }
            .dropdown_3ia4Q .dropdownMenu_3ubJx {
                min-width: 100%;
            }
        </style>
        <style type="text/css">
            .contributor_Ecj3O {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 34px;
                border-radius: 8px;
                background: #fff;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08), 0 4px 8px rgba(0, 0, 0, 0.04);
            }
            .contributor_Ecj3O .contributorName_1lHIB {
                color: #596080;
                max-width: 95px;
            }
        </style>
        <style type="text/css">
            .container_3gyxZ .wrapper_8d7cC {
                border: 1px solid #d8dbeb;
                border-radius: 8px;
            }
            .container_3gyxZ .wrapper_8d7cC:hover {
                background: #f5f6fa;
            }
            .container_3gyxZ .wrapper_8d7cC .name_1s8gA {
                max-width: 100px;
            }
            .container_3gyxZ .wrapper_8d7cC .image_1sHvo {
                border-radius: 8px 0 0 8px;
                object-fit: cover;
            }
        </style>
        <style type="text/css">
            .container_2B6q5 .remove_2buUK {
                color: #1c2033;
                line-height: 1;
            }
            .container_2B6q5 .remove_2buUK:hover {
                color: #de524c;
                text-decoration: none;
            }
        </style>
        <style type="text/css">
            .container_2qMFB {
                background: #fff;
                width: 100%;
                overflow: hidden;
                max-height: 286px;
            }
            .container_2qMFB .suggestion_3MsSk.active_189Bi,
            .container_2qMFB .suggestion_3MsSk:hover {
                background: #ebedf5 !important;
            }
        </style>
        <style type="text/css">
            .container_36_9q .contributor_1kETA {
                background-color: #ebedf5;
                border-radius: 8px;
                box-shadow: 0 0 0 1px #ebedf5;
            }
            .container_36_9q .contributor_1kETA .input_3lwyb:focus,
            .container_36_9q .input_3lwyb {
                background-color: #ebedf5;
                border-color: #ebedf5;
            }
            .container_36_9q .input_3lwyb {
                padding-left: 2.5rem;
                border-radius: 8px;
                background-image: url(https://cdna.iconscout.com/img/1d3df10.svg);
                background-repeat: no-repeat;
                background-position: 10px;
                transition: background-color 0.2s linear, border-color 0.2s linear;
            }
            .container_36_9q .input_3lwyb:focus {
                box-shadow: none;
                background-color: #fff;
                border-color: #d8dbeb;
            }
            .container_36_9q .searchSuggestions_1HweO,
            .container_36_9q .wrapper_39Ebq {
                z-index: 1;
                position: absolute;
                top: 48px;
                left: 0;
                border: 1px solid #d8dbeb;
                border-radius: 8px;
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08), 0 12px 16px rgba(0, 0, 0, 0.04);
            }
            .container_36_9q .wrapper_39Ebq {
                background: #fff;
                width: 100%;
                overflow-x: hidden;
                overflow-y: auto;
                max-height: 372px;
            }
        </style>
        <style type="text/css"></style>
        <style type="text/css">
            .nuxt {
                min-height: 100vh;
            }
        </style>
        <style type="text/css">
            .container_iJ8j4 {
                padding: 0.75rem;
                text-align: center;
                background: #00686e;
                color: #fff;
                font-weight: 500;
            }
            .container_iJ8j4 .close_2Elyl {
                cursor: pointer;
                position: absolute;
                right: 15px;
                top: 10px;
            }
            .container_iJ8j4 .close_2Elyl svg {
                vertical-align: middle;
            }
            .container_iJ8j4 .close_2Elyl svg [fill-rule="nonzero"] {
                fill: #fff;
            }
            .container_iJ8j4 .emailSent_2S3Ri {
                text-decoration: underline;
            }
        </style>
        <script async="" src="./Terms of Use_files/clarity.js.download"></script>
        <script async="" src="./Terms of Use_files/main.30b4c3f2.js.download"></script>
        <script async="" src="./Terms of Use_files/80wieaxwf2"></script>
        <script src="./Terms of Use_files/839642746622192" async=""></script>
        <script async="" src="./Terms of Use_files/fbevents.js.download"></script>
        <script type="text/javascript" async="" src="./Terms of Use_files/core.js.download"></script>
        <script type="text/javascript" async="" src="./Terms of Use_files/f.txt"></script>
        <script type="text/javascript" async="" src="./Terms of Use_files/analytics.js.download"></script>
        <script type="text/javascript" async="" src="./Terms of Use_files/a.js.download"></script>
        <script type="text/javascript" integrity="sha384-u0hlTAJ1tNefeBKwiBNwB4CkHZ1ck4ajx/pKmwWtc+IufKJiCQZ+WjJIi+7C6Ntm" crossorigin="anonymous" async="" src="./Terms of Use_files/amplitude-8.1.0-min.gz.js.download"></script>
        <script src="./Terms of Use_files/l.js.download" async=""></script>
        <script charset="utf-8" src="./Terms of Use_files/64ce2800045f7521a2b6.js.download"></script>
        <link href="https://client.relay.crisp.chat/" rel="dns-prefetch" crossorigin="" />
        <link href="https://client.crisp.chat/" rel="preconnect" crossorigin="" />
        <script src="./Terms of Use_files/client.js.download" type="text/javascript" async=""></script>
        <link href="./Terms of Use_files/client_default.css" type="text/css" rel="stylesheet" />
        <script charset="utf-8" src="./Terms of Use_files/9c5b1dae1af73f7db503.js.download"></script>
        <style type="text/css">
            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
            .fadeIn {
                animation-name: fadeIn;
            }
            @keyframes fadeOut {
                0% {
                    opacity: 1;
                }
                to {
                    opacity: 0;
                }
            }
            .fadeOut {
                animation-name: fadeOut;
            }
            .fade-move {
                transition: transform 0.3s ease-out;
            }
        </style>
        
        <div id="__nuxt">
            <!---->
            <div id="__layout">
                <div>
                    <div><!----></div>
                    <div class="nuxt">

                        <div class="wrapper">
                            <section class="bg-primary">
                                <div class="container">
                                    <div class="legal-header align-items-center"><h1 class="display-4">Iconscart Legal</h1></div>
                                </div>
                            </section>
                            <section>
                                <div class="container mt-7">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="side_menu">
                                               <ul class="side_menu">
                                                <li><a href="{{url('terms-of-use')}}" class="nuxt-link-exact-active nuxt-link-active">Terms of Use</a></li>
                                                <li><a href="{{url('privacy-policy')}}" class="">Privacy Policy</a></li>
                                                <li><a href="{{url('contributer-terms')}}" class="">Contributor Terms</a></li>
                                            </ul>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="content-header">
                                                <h1 class="h2">Terms of Use</h1>
                                                <small class="font-size-sm">UPDATED February 10, 2021 </small> <br />
                                                <br />
                                            </div>
                                            <article class="content">
                                                <h2><strong>Acceptance of the Terms of Use</strong></h2>
                                                <p>
                                                    These terms of use are entered into by and between You and Design Barn Inc., (“ Company ”, “ we ”, or “ us ”). The following terms and conditions, together with any documents they
                                                    expressly incorporate by reference (these “ Terms of Use ”), govern your access to and use of
                                                    <a href="https://iconscout.com/legal/terms-of-use">https://iconscout.com/legal/terms-of-use</a>, including any content, functionality, and services offered on or through
                                                    <a href="http://www.iconscout.com/">www.iconscout.com</a>, software, apps, or plug-ins, (collectively, the “ Website ”), and all other products, services, content or application that link
                                                    to these Terms of Use (together with the Website, the “ Services ”).
                                                </p>
                                                <p>
                                                    Please read the Terms of Use carefully before you start to use the Website. By using the Website, you accept and agree to be bound and abide by these Terms of Use and our Privacy Policy,
                                                    found at Privacy Policy, incorporated herein by reference. If you do not want to agree to these Terms of Use or the Privacy Policy, you must not access or use the Website.
                                                </p>
                                                <p>
                                                    The Website and Services are offered and available to users who are 13 years of age or older (or at least 16 years old if you are a resident of European Union or United Kingdom). By using
                                                    the Services, you represent and warrant that you are of legal age to form a binding contract with the Company and meet all of the foregoing eligibility requirements. If you do not meet all
                                                    of these requirements, you must not access or use the Website and Services. You are solely responsible for ensuring that your use of the Website and Services comply with all applicable
                                                    law.
                                                </p>
                                                <h2><strong>Changes to the Terms of Use</strong></h2>
                                                <p>
                                                    We may revise and update these Terms of Use from time to time in our sole discretion. All changes are effective immediately when we post them, and apply to all access to and use of the
                                                    Website thereafter. However, any changes to the dispute resolution provisions set out in&nbsp;<strong>Governing Law and Jurisdiction</strong>&nbsp;will not apply to any disputes for which
                                                    the parties have actual notice before the date the change is posted on the Website.
                                                </p>
                                                <p>
                                                    Your continued use of the Website following the posting of revised Terms of Use means that you accept and agree to the changes. You are expected to check this page each time you access
                                                    this Website so you are aware of any changes, as they are binding on you.
                                                </p>
                                                <h2>Accessing the Website and Account Security</h2>
                                                <p>
                                                    We reserve the right to withdraw or amend this Website, and any service or material we provide on the Website, in our sole discretion without notice. We will not be liable if for any
                                                    reason all or any part of the Website is unavailable at any time or for any period. From time to time, we may restrict access to some parts of the Website, or the entire Website, to users,
                                                    including registered users.
                                                </p>
                                                <p>You are responsible for:</p>
                                                <ul>
                                                    <li>Making all arrangements necessary for you to have access to the Website.</li>
                                                    <li>Ensuring that all persons who access the Website and the Services through your internet connection are aware of these Terms of Use and comply with them.</li>
                                                </ul>
                                                <p>
                                                    To access the Website or the Services or some of the resources it offers, you may be asked to provide certain registration details or other information. It is a condition of your use of
                                                    the Website or the Services that all the information you provide on the Website is correct, current, and complete. You agree that all information you provide to register with this Website
                                                    or otherwise, including but not limited to through the use of any interactive features on the Website, is governed by our
                                                    <a href="https://iconscout.com/legal/privacy-policy">Privacy Policy</a>, and you consent to all actions we take with respect to your information consistent with our Privacy Policy.
                                                </p>
                                                <p>
                                                    If you choose, or are provided with, a user name, password, or any other piece of information as part of our security procedures, you must treat such information as confidential, and you
                                                    must not disclose it to any other person or entity. You also acknowledge that your account is personal to you and agree not to provide any other person with access to this Website or
                                                    portions of it using your user name, password, or other security information. You agree to notify us immediately of any unauthorized access to or use of your user name or password or any
                                                    other breach of security. You also agree to ensure that you exit from your account at the end of each session. You should use particular caution when accessing your account from a public
                                                    or shared computer so that others are not able to view or record your password or other personal information.
                                                </p>
                                                <p>
                                                    We have the right to disable any user name, password, or other identifiers, whether chosen by you or provided by us, at any time in our sole discretion for any or no reason, including if,
                                                    in our opinion, you have violated any provision of these Terms of Use.
                                                </p>
                                                <h2>Intellectual Property Rights</h2>
                                                <p>
                                                    The Website, the Services and entire contents, features, and functionality (including but not limited to all information, software, text, displays, images, video, and audio, and the
                                                    design, selection, and arrangement thereof) are owned by the Company, its licensors, its contributors or other providers of such material and are protected by United States and
                                                    international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.
                                                </p>
                                                <p>
                                                    You will respect the intellectual property rights of the Company and third parties at all times. You agree not to have any rights or interest in any of our intellectual property rights,
                                                    not have right to use, except to the extent permitted under these Terms of Use. The rights and obligations assumed under this Terms of Use will not be construed as an assignment or
                                                    license, in whole or in part, of any intellectual property rights over the Website or any of the Services, unless it is expressly provided otherwise.
                                                </p>
                                                <p>
                                                    These Terms of Use permit You to use the Website and the Services for your personal, non-commercial use only. Except for content that is in the public domain or the content that you have
                                                    permission to use in connection with Your use of Services, You must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download,
                                                    store, or transmit any of the material on our Website, or otherwise use or exploit any content for commercial use or in any way that violates any third party right.
                                                </p>
                                                <p>You must not:</p>
                                                <ul>
                                                    <li>Use any illustrations, photographs, video or audio sequences, or any graphics separately from the accompanying text.</li>
                                                    <li>Create derivative works based on any materials from this site or reverse engineer any materials from this site.</li>
                                                    <li>Use any data mining, or similar data gathering and extraction methods in connection with any materials from the site;</li>
                                                    <li>Delete or alter any copyright, trademark, or other proprietary rights notices from copies of materials from this site.</li>
                                                </ul>
                                                <p>
                                                    If you print, copy, modify, download, or otherwise use or provide any other person with access to any part of the Website or the content in breach of the Terms of Use, your right to use
                                                    the Website will stop immediately and you must, at our option, return or destroy any copies of the materials you have made. No right, title, or interest in or to the Website or any content
                                                    on the Website is transferred to you, and all rights not expressly granted are reserved by the Company. Any use of the Website or Services not expressly permitted by these Terms of Use is
                                                    a breach of these Terms of Use and may violate copyright, trademark, and other laws.
                                                </p>
                                                <p>
                                                    We may use certain applications or software to access our Services. Any third-party code that may be incorporated in such applications or software is covered by the applicable open source
                                                    or third-party license that is subject to terms that as a condition of use, copying, modification, or redistribution, require such software and derivative works thereof to be disclosed or
                                                    distributed in source code form, to be licensed for the purpose of making derivative works or to be redistributed free of charge.
                                                </p>
                                                <h2>Prohibited Uses</h2>
                                                <p>You may use the Website and the Services only for lawful purposes and in accordance with these Terms of Use. You agree not to use the Website or any content:</p>
                                                <ul>
                                                    <li>
                                                        In any way that violates any applicable federal, state, local, or international law or regulation (including, without limitation, any laws regarding the export of data or software to
                                                        and from the US or other countries).
                                                    </li>
                                                    <li>
                                                        For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content, asking for personally identifiable information, or
                                                        otherwise.
                                                    </li>
                                                    <li>To send, knowingly receive, upload, download, use, or re-use any material that does not comply with the Content Standards set out in these Terms of Use.</li>
                                                    <li>
                                                        To transmit, or procure the sending of, any advertising or promotional material without our prior written consent, including any “junk mail”, “chain letter”, “spam”, or any other
                                                        similar solicitation.
                                                    </li>
                                                    <li>
                                                        To impersonate or attempt to impersonate the Company, a Company employee, another user, or any other person or entity (including, without limitation, by using email addresses or screen
                                                        names associated with any of the foregoing).
                                                    </li>
                                                    <li>
                                                        To engage in any other conduct that restricts or inhibits anyone's use or enjoyment of the Website, or which, as determined by us, may harm the Company or users of the Website or
                                                        expose them to liability.
                                                    </li>
                                                </ul>
                                                <p>Additionally, you agree not to:</p>
                                                <ul>
                                                    <li>
                                                        Use the Website or any content in any manner that could disable, overburden, damage, or impair the site or interfere with any other party's use of the Website, including their ability
                                                        to engage in real time activities through the Website.
                                                    </li>
                                                    <li>Use any robot, spider, or other automatic device, process, or means to access the Website for any purpose, including monitoring or copying any of the material on the Website.</li>
                                                    <li>Use any manual process to monitor or copy any of the material on the Website or for any other unauthorized purpose without our prior written consent.</li>
                                                    <li>Use any device, software, or routine that interferes with the proper working of the Website.</li>
                                                    <li>Introduce any viruses, Trojan horses, worms, logic bombs, or other material that is malicious or technologically harmful.</li>
                                                    <li>
                                                        Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of the Website, the server on which the Website is stored, or any server, computer, or database
                                                        connected to the Website.
                                                    </li>
                                                    <li>Attack the Website via a denial-of-service attack or a distributed denial-of-service attack.</li>
                                                    <li>Otherwise attempt to interfere with the proper working of the Website.</li>
                                                </ul>
                                                <h2>User Contributions</h2>
                                                <p>
                                                    The Website may contain message boards, chat rooms, personal web pages or profiles, forums, bulletin boards, and other interactive features (collectively, “ Interactive Services”) that
                                                    allow users to post, submit, publish, display, or transmit to other users or other persons (hereinafter,“ post”) image, footage, text, audio or any other content or materials
                                                    (collectively, “User Contributions”) on or through the Website.
                                                </p>
                                                <p>
                                                    All User Contributions must comply with the Content Standards set out in these Terms of Use. Any User Contribution You post to the Website will be considered non-confidential and
                                                    non-proprietary. By providing any User Contribution on the Website, You grant us and our affiliates and service providers, and each of their and our respective licensees, successors, and
                                                    assigns the right to use, reproduce, modify, perform, display, distribute, and otherwise disclose to third parties any such material for any purpose/according to your account settings.
                                                    Such license will continue until you remove the User Contribution from the Website, in which case such license shall terminate within six months after You removal of the User Contribution
                                                    from the Website. Notwithstanding the foregoing, the Company will have the right to archive and preserve User Contribution for disputes, legal proceedings or investigations, indefinitely.
                                                </p>
                                                <p>You represent and warrant that:</p>
                                                <ul>
                                                    <li>
                                                        You own or control all rights in and to the User Contributions and have the right to grant the license granted above to us and our affiliates and service providers, and each of their
                                                        and our respective licensees, successors, and assigns.
                                                    </li>
                                                    <li>The Company will not need to obtain licenses from any third party or pay royalties to any third party with respect to the User Contributions.</li>
                                                    <li>User Contributions does not infringe any third party’s rights, including but not limited to intellectual property rights and privacy rights.</li>
                                                    <li>All of your User Contributions do and will comply with these Terms of Use.</li>
                                                </ul>
                                                <p>
                                                    You understand and acknowledge that you are responsible for any User Contributions you submit or contribute, and you, not the Company, have full responsibility for such content, including
                                                    its legality, reliability, accuracy, and appropriateness.
                                                </p>
                                                <p>We are not responsible or liable to any third party for the content or accuracy of any User Contributions posted by you or any other user of the Website.</p>
                                                <h2>Sharing</h2>
                                                <p>
                                                    Our Website may provide features that allow you to share your User Contributions with other users or to make it public via email, post, transmit, upload, or other means, and other users
                                                    may use, copy, modify or re-share your User Contribution in many ways. We do not control what other users do with your User Contribution. You are responsible for determining the
                                                    limitations that are placed on your User Contribution and for applying the appropriate level of access to your User Contribution and sharing your User Contribution and advising the other
                                                    users of the same.
                                                </p>
                                                <h2>Account Information</h2>
                                                <p>
                                                    You are responsible for all activities that occur through your account. You may not share your account information or use another person’s account. Please notify us immediately, if you
                                                    become aware of any unauthorized use of your account. Your account administrator may use your account information to manage your use and access of the Website.
                                                </p>
                                                <h2>Monitoring and Enforcement; Termination</h2>
                                                <p>We have the right to:</p>
                                                <ul>
                                                    <li>Remove or refuse to post any User Contributions for any or no reason in our sole discretion.</li>
                                                    <li>
                                                        Take any action with respect to any User Contribution that we deem necessary or appropriate in our sole discretion, including if we believe that such User Contribution violates the
                                                        Terms of Use, including the Content Standards, infringes any intellectual property right or other right of any person or entity, threatens the personal safety of users of the Website
                                                        or the public, or could create liability for the Company.
                                                    </li>
                                                    <li>
                                                        Disclose your identity or other information about you to any third party who claims that material posted by you violates their rights, including their intellectual property rights or
                                                        their right to privacy.
                                                    </li>
                                                    <li>Take appropriate legal action, including without limitation, referral to law enforcement, for any illegal or unauthorized use of the Website.</li>
                                                    <li>Terminate or suspend your access to all or part of the Website for any or no reason, including without limitation, any violation of these Terms of Use.</li>
                                                </ul>
                                                <p>
                                                    Without limiting the foregoing, we have the right to cooperate fully with any law enforcement authorities or court order requesting or directing us to disclose the identity or other
                                                    information of anyone posting any materials on or through the Website.
                                                </p>
                                                <p>
                                                    YOU WAIVE AND HOLD HARMLESS THE COMPANY AND ITS AFFILIATES, LICENSEES, AND SERVICE PROVIDERS FROM ANY CLAIMS RESULTING FROM ANY ACTION TAKEN BY THE COMPANY/ANY OF THE FOREGOING PARTIES
                                                    DURING, OR TAKEN AS A CONSEQUENCE OF, INVESTIGATIONS BY EITHER THE COMPANY/SUCH PARTIES OR LAW ENFORCEMENT AUTHORITIES.
                                                </p>
                                                <p>
                                                    However, we cannot undertake to review all material before it is posted on the Website, and cannot ensure prompt removal of objectionable material after it has been posted. Accordingly, we
                                                    assume no liability for any action or inaction regarding transmissions, communications, or content provided by any user or third party. We have no liability or responsibility to anyone for
                                                    performance or nonperformance of the activities described in this section.
                                                </p>
                                                <h2>Content Standards</h2>
                                                <p>
                                                    These content standards apply to any and all User Contributions and use of Interactive Services. User Contributions must in their entirety comply with all applicable federal, state, local,
                                                    and international laws and regulations. Without limiting the foregoing, User Contributions must not:
                                                </p>
                                                <ul>
                                                    <li>Contain any material that is defamatory, obscene, indecent, abusive, offensive, harassing, violent, hateful, inflammatory, or otherwise objectionable.</li>
                                                    <li>Promote sexually explicit or pornographic material, violence, or discrimination based on race, sex, religion, nationality, disability, sexual orientation, or age.</li>
                                                    <li>Infringe any patent, trademark, trade secret, copyright, or other intellectual property or other rights of any other person.</li>
                                                    <li>
                                                        Violate the legal rights (including the rights of publicity and privacy) of others or contain any material that could give rise to any civil or criminal liability under applicable laws
                                                        or regulations or that otherwise may be in conflict with these Terms of Use and our&nbsp;<a href="https://iconscout.com/legal/privacy-policy">Privacy Policy</a>.
                                                    </li>
                                                    <li>Be likely to deceive any person.</li>
                                                    <li>Promote any illegal activity, or advocate, promote, or assist any unlawful act.</li>
                                                    <li>Cause annoyance, inconvenience, or needless anxiety or be likely to upset, embarrass, alarm, or annoy any other person.</li>
                                                    <li>Impersonate any person, or misrepresent your identity or affiliation with any person or organization.</li>
                                                    <li>Involve commercial activities or sales, such as contests, sweepstakes, and other sales promotions, barter, or advertising.</li>
                                                    <li>Give the impression that they emanate from or are endorsed by us or any other person or entity, if this is not the case.</li>
                                                </ul>
                                                <h2>Reliance on Information Posted</h2>
                                                <p>
                                                    The information and the content presented on or through the Website is made available solely for general information purposes. We do not warrant the accuracy, completeness, or usefulness
                                                    of this information. Any reliance you place on such information is strictly at your own risk. We disclaim all liability and responsibility arising from any reliance placed on such
                                                    materials by you or any other visitor to the Website, or by anyone who may be informed of any of its contents. This Website may include content provided by third parties, including
                                                    materials provided by other users, bloggers, and third-party licensors, syndicators, aggregators, and/or reporting services. All statements and/or opinions expressed in these materials,
                                                    and all articles and responses to questions and other content, other than the content provided by the Company, are solely the opinions and the responsibility of the person or entity
                                                    providing those materials. These materials do not necessarily reflect the opinion of the Company. We are not responsible, or liable to you or any third party, for the content or accuracy
                                                    of any materials provided by any third parties.
                                                </p>
                                                <h2>Changes to the Website</h2>
                                                <p>
                                                    We may update the content on this Website from time to time, but its content is not necessarily complete or up-to-date. Any of the material on the Website may be out of date at any given
                                                    time, and we are under no obligation to update such material.
                                                </p>
                                                <h2>Information About You and Your Visits to the Website</h2>
                                                <p>
                                                    All information we collect on this Website is subject to our Privacy Policy.(<a href="https://iconscout.com/legal/privacy-policy">https://iconscout.com/legal/privacy-policy</a>). By using
                                                    the Website, you consent to all actions taken by us with respect to your information in compliance with the Privacy Policy.
                                                </p>
                                                <h2>Online Purchases and Other Terms and Conditions</h2>
                                                <p>
                                                    All the purchases through our Website or other transactions for the sale of certain Services or subscription or information formed through the Website or resulting from visits made by you
                                                    are governed by our [Terms &amp; Conditions for Sale] (<a href="https://iconscout.com/legal/contributor-terms">https://iconscout.com/legal/contributor-terms</a>), which are hereby
                                                    incorporated into these Terms of Use.
                                                </p>
                                                <p>
                                                    Additional terms and conditions may also apply to specific portions, services, or features of the Website. All such additional terms and conditions are hereby incorporated by this
                                                    reference into these Terms of Use.
                                                </p>
                                                <p>In case of discrepancies, the Terms &amp; Conditions for Sale or additional terms and conditions, as applicable, shall prevail over these Terms of Use.</p>
                                                <h2>Linking to the Website and Social Media Features</h2>
                                                <p>
                                                    You may link to our homepage, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it, but you must not establish a link in such a way
                                                    as to suggest any form of association, approval, or endorsement on our part without our express written consent.
                                                </p>
                                                <p>This Website may provide certain social media features that enable you to:</p>
                                                <ul>
                                                    <li>Link from your own or certain third-party websites to certain content on this Website.</li>
                                                    <li>Send emails or other communications with certain content, or links to certain content, on this Website.</li>
                                                    <li>Cause limited portions of content on this Website to be displayed or appear to be displayed on your own or certain third-party websites.</li>
                                                </ul>
                                                <p>
                                                    You may use these features solely as they are provided by us and solely with respect to the content they are displayed with and otherwise in accordance with any additional terms and
                                                    conditions we provide with respect to such features. Subject to the foregoing, you must not:
                                                </p>
                                                <ul>
                                                    <li>Establish a link from any website that is not owned by you.</li>
                                                    <li>Cause the Website or portions of it to be displayed on, or appear to be displayed by, any other site, for example, framing, deep linking, or in-line linking.</li>
                                                    <li>Otherwise, take any action with respect to the materials on this Website that is inconsistent with any other provision of these Terms of Use.</li>
                                                </ul>
                                                <p>The website from which you are linking, or on which you make certain content accessible, must comply in all respects with the Content Standards set out in these Terms of Use.</p>
                                                <p>You agree to cooperate with us in causing any unauthorized framing or linking immediately to stop. We reserve the right to withdraw linking permission without notice.</p>
                                                <p>We may disable all or any social media features and any links at any time without notice in our discretion.</p>
                                                <h2>Links from the Website</h2>
                                                <p>
                                                    If the Website contains links to other sites and resources provided by third parties, these links are provided for your convenience only. This includes links contained in advertisements,
                                                    including banner advertisements and sponsored links. We have no control over the contents of those sites or resources, and accept no responsibility for them or for any loss or damage that
                                                    may arise from your use of them. If you decide to access any of the third-party websites linked to this Website, you do so entirely at your own risk and subject to the terms and conditions
                                                    of use for such websites.
                                                </p>
                                                <h2>Geographic Restrictions</h2>
                                                <p>
                                                    The owner of the Website is based in the state of California in the United States. We make no claims that the Website or any of its content is accessible or appropriate outside of the
                                                    United States. Access to the Website may not be legal by certain persons or in certain countries. If you access the Website from outside the United States, you do so on your own initiative
                                                    and are responsible for compliance with local laws.
                                                </p>
                                                <h2>Disclaimer of Warranties</h2>
                                                <p>
                                                    You understand that we cannot and do not guarantee or warrant that files available for downloading from the internet or the Website will be free of viruses or other destructive code. You
                                                    are responsible for implementing sufficient procedures and checkpoints to satisfy your particular requirements for anti-virus protection and accuracy of data input and output, and for
                                                    maintaining a means external to our site for any reconstruction of any lost data. TO THE FULLEST EXTENT PROVIDED BY LAW, WE WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE CAUSED BY A
                                                    DISTRIBUTED DENIAL-OF-SERVICE ATTACK, VIRUSES, OR OTHER TECHNOLOGICALLY HARMFUL MATERIAL THAT MAY INFECT YOUR COMPUTER EQUIPMENT, COMPUTER PROGRAMS, DATA, OR OTHER PROPRIETARY MATERIAL DUE
                                                    TO YOUR USE OF THE WEBSITE OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE WEBSITE OR TO YOUR DOWNLOADING OF ANY MATERIAL POSTED ON IT, OR ON ANY WEBSITE LINKED TO IT.
                                                </p>
                                                <p>
                                                    TO THE FULLEST EXTENT PROVIDED BY LAW, THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY
                                                    WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR PURPOSE.
                                                </p>
                                                <p>THE FOREGOING DOES NOT AFFECT ANY WARRANTIES THAT CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>
                                                <h2>Limitation on Liability</h2>
                                                <p>
                                                    TO THE FULLEST EXTENT PROVIDED BY LAW, IN NO EVENT WILL THE COMPANY, ITS AFFILIATES, OR THEIR LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS, OR DIRECTORS BE LIABLE FOR DAMAGES
                                                    OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR INABILITY TO USE, THE WEBSITE, ANY WEBSITES LINKED TO IT, ANY CONTENT ON THE WEBSITE OR SUCH OTHER
                                                    WEBSITES, INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO, PERSONAL INJURY, PAIN AND SUFFERING, EMOTIONAL DISTRESS,
                                                    LOSS OF REVENUE, LOSS OF PROFITS, LOSS OF BUSINESS OR ANTICIPATED SAVINGS, LOSS OF USE, LOSS OF GOODWILL, LOSS OF DATA, AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF
                                                    CONTRACT, OR OTHERWISE, EVEN IF FORESEEABLE.
                                                </p>
                                                <p>THE FOREGOING DOES NOT AFFECT ANY LIABILITY THAT CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.</p>
                                                <h2>Indemnification</h2>
                                                <p>
                                                    You agree to defend, indemnify, and hold harmless the Company, its affiliates, licensors, and service providers, and its and their respective officers, directors, employees, contractors,
                                                    agents, licensors, suppliers, successors, and assigns from and against any claims, liabilities, damages, judgments, awards, losses, costs, expenses, or fees (including reasonable
                                                    attorneys' fees) arising out of or relating to your violation of these Terms of Use or your use of the Website, including, but not limited to, your User Contributions, any use of the
                                                    Website's content, services, and products other than as expressly authorized in these Terms of Use or your use of any information obtained from the Website.
                                                </p>
                                                <h2>Governing Law and Jurisdiction</h2>
                                                <p>
                                                    All matters relating to the Website and these Terms of Use and any dispute or claim arising therefrom or related thereto (in each case, including non-contractual disputes or claims), shall
                                                    be governed by and construed in accordance with the internal laws of the State of California without giving effect to any choice or conflict of law provision or rule.
                                                </p>
                                                <p>
                                                    Any legal suit, action, or proceeding arising out of, or related to, these Terms of Use or the Website shall be instituted exclusively in the federal courts of the United States or the
                                                    courts of the State of California, in each case located in the City of Santa Clara and County of Santa Clara, although we retain the right to bring any suit, action, or proceeding against
                                                    you for breach of these Terms of Use in your country of residence or any other relevant country. You waive any and all objections to the exercise of jurisdiction over you by such courts
                                                    and to venue in such courts.
                                                </p>
                                                <h2>Arbitration</h2>
                                                <p>
                                                    At Company's sole discretion, it may require You to submit any disputes arising from the use of these Terms of Use or the Website, including disputes arising from or concerning their
                                                    interpretation, violation, invalidity, non-performance, or termination, to final and binding arbitration under the Rules of Arbitration of the American Arbitration Association applying
                                                    laws of the State of California. The language of the arbitration shall be English and the place of arbitration shall be Santa Clara County, California. Each party shall bear its own costs
                                                    in the arbitration.
                                                </p>
                                                <h2>Limitation on Time to File Claims</h2>
                                                <p>
                                                    ANY CAUSE OF ACTION OR CLAIM YOU MAY HAVE ARISING OUT OF OR RELATING TO THESE TERMS OF USE OR THE WEBSITE MUST BE COMMENCED WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES,
                                                    OTHERWISE, SUCH CAUSE OF ACTION OR CLAIM IS PERMANENTLY BARRED.
                                                </p>
                                                <h2>Waiver and Severability</h2>
                                                <p>
                                                    No waiver by the Company of any term or condition set out in these Terms of Use shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or
                                                    condition, and any failure of the Company to assert a right or provision under these Terms of Use shall not constitute a waiver of such right or provision.
                                                </p>
                                                <p>
                                                    If any provision of these Terms of Use is held by a court or other tribunal of competent jurisdiction to be invalid, illegal, or unenforceable for any reason, such provision shall be
                                                    eliminated or limited to the minimum extent such that the remaining provisions of the Terms of Use will continue in full force and effect.
                                                </p>
                                                <h2>Entire Agreement</h2>
                                                <p>
                                                    <em>
                                                        The Terms of Use, our Terms &amp; Conditions for Sale, our Privacy Policy, and Copyright Policy constitute the sole and entire agreement between you and Design Barn Inc., regarding the
                                                        Website and supersede all prior and contemporaneous understandings, agreements, representations, and warranties, both written and oral, regarding the Website.
                                                    </em>
                                                </p>
                                                <h2>Your Comments and Concerns</h2>
                                                <p>This website is operated by Design Barn Inc., 7302 Royal Oaks, Pleasanton, CA 94566.</p>
                                                <p>
                                                    All notices of copyright infringement claims should be sent to the copyright agent designated in our&nbsp;
                                                    <a href="https://lottiefiles.com/page/copyright-policy">Copyright Policy</a>&nbsp;in the manner and by the means set out therein.
                                                </p>
                                                <p>All other feedback, comments, requests for technical support, and other communications relating to the Website should be directed to <a>support@iconscout.com</a></p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <footer id="footer" class="footer_29C--">
                            <div class="container py-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-sm-0 mb-3"><div></div></div>
                                    <div class="col-md-6 col-sm-12 links_3wu7H">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="https://iconscout.com/pricing" class="">Pricing</a></li>
                                            <li class="list-inline-item"><a href="https://iconscout.com/3ds" class="">3D Illustrations</a></li>
                                            <li class="list-inline-item"><a href="https://iconscout.com/lotties" class="">Lottie Animations</a></li>
                                            <li class="list-inline-item"><a href="https://iconscout.com/illustrations" class="">Illustrations</a></li>
                                            <li class="list-inline-item"><a href="https://iconscout.com/icons" class="">Icons</a></li>
                                            <li class="list-inline-item"><a href="https://iconscout.com/legal/terms-of-use" class="nuxt-link-exact-active nuxt-link-active" target="_blank">Legal</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </footer>
                    </div>
                    <!---->
                    <div></div>
                </div>
            </div>
        </div>
      @endsection