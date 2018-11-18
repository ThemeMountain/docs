<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
    var client = algoliasearch('{{ $page->search->algolia->appID }}', '{{ $page->search->algolia->searchKey }}');
    var index = client.initIndex('{{ $page->search->algolia->indexName }}');
    autocomplete('#search',
        {
            hint: false
        },
        {
        source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
        templates: {
            header: function () {
                return '<div class="flex justify-between items-center py-2 px-4">'
                        + '<span class="block text-sm text-grey-dark">Search results:</span>'
                        + '<a href="https://www.algolia.com" target="_blank" rel="noopener" class="aa-footer-logo">Search by Algolia</a>'
                        + '</div>';
            },
            suggestion: function(suggestion) {
                return '<a href="'+suggestion.path+'" class="block p-4 hover:text-{{ $page->color }}">'
                        + '<span class="block text-sm">'+suggestion._highlightResult.title.value+'</span>'
                        + '<span class="block text-xs text-grey">'+suggestion._snippetResult.body.value+'</span>'
                        + '</a>';
            }
        }
    }).on('autocomplete:selected', function (e, suggestion, dataset) {
        location.assign(suggestion.path);
    });
</script>

