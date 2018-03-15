const _ = require('lodash')

exports.get = source => {
    let sitesUsingAlgoliaSearch = []

    for (let site in source) {

        if (_.has(source[site], 'search')) {
            sitesUsingAlgoliaSearch.push( _.pick(source, [site]) )
        } else {
            for (let s in source[site]) {
                let entry = _.pickBy(source[site], o => {return _.has(o, 'search') && o.search.driver == 'algolia'} )
                sitesUsingAlgoliaSearch.push( entry )
            }
        }
    }

    sitesUsingAlgoliaSearch = _.uniqWith(sitesUsingAlgoliaSearch, _.isEqual)
    return sitesUsingAlgoliaSearch
}
