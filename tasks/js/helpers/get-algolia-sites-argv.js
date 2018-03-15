const _ = require('lodash')

/*
** Gets site keys from config, based on array values with dot notation
*/

exports.get = (source, sites) => {
    let sitesUsingAlgoliaSearch = []

    for (var i = 0; i < sites.length; i++) {
        let sitePath = sites[i]
        let parts = sitePath.split('.')
        let category = parts[0]
        let site = parts[1]

        let rootKey = source[category]

        if (!rootKey) {
            console.error('"' + category + '" site does not exist. Skipping...')
        }

        if (!site) { // dot notation not used, it's a top level site

            if ( _.has(rootKey, 'search.driver') && rootKey.search.driver == 'algolia' && rootKey.search.indexName ) {
                sitesUsingAlgoliaSearch.push( _.pick(source, category) )
            }

        } else {

            if ( _.has(rootKey[site], 'search.driver') && rootKey[site].search.driver == 'algolia' && rootKey[site].search.indexName ) {
                sitesUsingAlgoliaSearch.push( _.pick(source[category], site) )
            }

        }
    }

    return sitesUsingAlgoliaSearch
}
