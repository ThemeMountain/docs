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
                return `<div class="flex justify-between items-center py-2 px-4">
                            <span class="block text-sm text-grey-dark">Search results:</span>
                            <a href="https://www.algolia.com" target="_blank" rel="noopener" class="aa-footer-logo">Search by Algolia</a>
                        </div>`;
            },
            suggestion: function(suggestion) {
                var path = 'offline' == '{{ $env }}' ? suggestion.path.split('/').pop() + '.html' : '/' + suggestion.path ;

                return `<a href="${path}" class="block p-4 hover:text-{{ $page->theme }}">
                            <span class="block text-sm">${suggestion._highlightResult.title.value}</span>
                            <span class="block text-xs text-grey">${suggestion._highlightResult.description.value}</span>
                        </a>`;
            }
        }
    }).on('autocomplete:selected', function (e, suggestion, dataset) {
        var path = 'offline' == '{{ $env }}' ? suggestion.path.split('/').pop() + '.html' : '/' + suggestion.path ;
        location.assign(path);
    });
</script>

