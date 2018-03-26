{{-- Algolia DocSearch --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.js"></script>
<script type="text/javascript">
    docsearch({
        apiKey: {{ $page->search->docsearch->searchKey }},
        indexName: {{ $page->search->docsearch->indexName }},
        inputSelector: '#search',
    });
</script>
