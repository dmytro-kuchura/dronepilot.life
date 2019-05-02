import React from "react";
import PropTypes from "prop-types";

class BlogList extends React.Component {
    state = {
        collapseOpen: false,
        modalSearch: false,
        color: "navbar-transparent"
    };

    constructor(props) {
        super(props);

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

export default BlogList;
