import React from "react";
import { connect } from "react-redux";

import {getBlogRecordsList} from "../../actions/admin-actions";

class BlogList extends React.Component {
    state = {
        collapseOpen: false,
        modalSearch: false,
    };

    constructor(props) {
        super(props);

        getBlogRecordsList();
        console.log(props);
        console.log(this.state);
    }

    componentDidMount() {
        //
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
        return (
            <>
                <tr>
                    <td>Dakota Rice</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                    <td className="text-center">$36,738</td>
                </tr>
            </>
        );
    }
}

const mapStateToProps = state => ({
    ...state
});
export default connect(mapStateToProps)(BlogList);
