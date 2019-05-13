import React from "react";
import {connect} from "react-redux";
import {Link} from "react-router-dom";

import axios from "axios";

class BlogList extends React.Component {
    state = {
        result: [],

        collapseOpen: false,
        modalSearch: false,
    };

    constructor(props) {
        super(props);
    }

    componentDidMount() {
        const self = this;

        axios.get('/api/v1/blog/list')
            .then(function (response) {
                self.setState({
                    result: response.data.result,
                })
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .finally(function () {
                // always executed
            });
    }

    componentWillUnmount() {
        //
    }

    toggleModalSearch = () => {
        this.setState({
            modalSearch: !this.state.modalSearch
        });
    };

    render() {

        if (!this.state.result.length) {
            return null;
        }

        let list = this.state.result;
        let html;

        if (list) {
            html = list.map(function (record) {
                return (
                    <tr key={record.id}>
                        <td>
                            <Link to={'/blog/' + record.id}>
                                {record.id}
                            </Link>
                        </td>
                        <td>{record.name}</td>
                        <td>{record.created_at}</td>
                        <td>{record.status}</td>
                        <td><i className="tim-icons icon-notes"/></td>
                    </tr>
                );
            });
        }

        return (
            <>
                {html}
            </>
        );
    }
}

const mapStateToProps = state => ({
    ...state
});
export default connect(mapStateToProps)(BlogList);
