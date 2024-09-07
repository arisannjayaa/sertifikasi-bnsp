<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- Libs JS -->
<script src="{{ asset('assets') }}/dist/libs/apexcharts/dist/apexcharts.min.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/libs/jsvectormap/dist/maps/world.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('assets') }}/dist/js/tabler.min.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/js/demo.min.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/libs/litepicker/dist/litepicker.js?1692870487" defer></script>
<script src="{{ asset('assets') }}/dist/libs/tom-select/dist/js/tom-select.base.min.js?1692870487" defer></script>

<!-- Datatable -->
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

<!-- Datepicker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>

<!-- select 2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Dropify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('datepicker-icon'),
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
            },
        }));
    });
    // @formatter:on
</script>

