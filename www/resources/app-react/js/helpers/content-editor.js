import React, {Component} from 'react';
import {getRecordsList} from "../services/records-service";


class ContentEditor extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            content: ''
        };

        document.designMode = 'on';

        this.handleClick = this.handleClick.bind(this);
    }

    componentDidUpdate(prevProps) {
        if (prevProps !== this.props) {
            this.setState({
                content: this.props.content,
            })
        }
    }

    handleClick(event) {
        let command = event.currentTarget.dataset.command;

        if (command === 'h1' || command === 'h2') {
            document.execCommand('formatBlock', false, command);
        }

        if (command === 'forecolor' || command === 'backcolor') {
            console.log('color');
            // document.execCommand($(this).data('command'), false, $(this).data('value'));
        }

        if (command === 'createlink' || command === 'insertimage') {
            let url = 'http://example.com';
            document.execCommand(command, false, url);
        } else {
            document.execCommand(command, false, null);
        }
    };

    render() {
        let colors = ['000000', 'FF9966', '6699FF', '99FF66', 'CC0000', '00CC00', '0000CC', '333333', '0066FF', 'FFFFFF'];

        console.log(this.state.content)

        return (
            <div>

                <div className="toolbar">
                    <div className="fore-wrapper">
                        <i className="fa fa-font"/>
                        <div className="fore-palette">
                            {colors.forEach(function (color, i) {
                                return <a href="#" data-command="forecolor" data-value={color[i]}
                                          className="palette-item"/>
                            })}
                        </div>
                    </div>
                    <div className="back-wrapper">
                        <i className="fa fa-font"/>
                        <div className="back-palette"></div>
                    </div>
                    <button data-command="bold" onClick={this.handleClick}><i className="fa fa-bold"/></button>
                    <button data-command="italic" onClick={this.handleClick}><i className="fa fa-italic"/></button>
                    <button data-command="underline" onClick={this.handleClick}><i className="fa fa-underline"/>
                    </button>
                    <button data-command="strikeThrough" onClick={this.handleClick}><i className="fa fa-strikethrough"/>
                    </button>
                    <button data-command="justifyLeft" onClick={this.handleClick}><i className="fa fa-align-left"/>
                    </button>
                    <button data-command="justifyCenter" onClick={this.handleClick}><i className="fa fa-align-center"/>
                    </button>
                    <button data-command="justifyRight" onClick={this.handleClick}><i className="fa fa-align-right"/>
                    </button>
                    <button data-command="justifyFull" onClick={this.handleClick}><i className="fa fa-align-justify"/>
                    </button>
                    <button data-command="indent" onClick={this.handleClick}><i className="fa fa-indent"/></button>
                    <button data-command="outdent" onClick={this.handleClick}><i className="fa fa-outdent"/></button>
                    <button data-command="insertUnorderedList" onClick={this.handleClick}><i className="fa fa-list-ul"/>
                    </button>
                    <button data-command="insertOrderedList" onClick={this.handleClick}><i className="fa fa-list-ol"/>
                    </button>
                    <button data-command="h1" onClick={this.handleClick}>H1</button>
                    <button data-command="h2" onClick={this.handleClick}>H2</button>
                    <button data-command="createlink" onClick={this.handleClick}><i className="fa fa-link"/></button>
                    <button data-command="unlink" onClick={this.handleClick}><i className="fa fa-unlink"/></button>
                    <button data-command="insertimage" onClick={this.handleClick}><i className="fa fa-image"/></button>
                    <button data-command="subscript" onClick={this.handleClick}><i className="fa fa-subscript"/>
                    </button>
                    <button data-command="superscript" onClick={this.handleClick}><i className="fa fa-superscript"/>
                    </button>
                </div>

                <div id="editor">
                    {this.state.content}
                </div>
            </div>
        );
    }
}

export default ContentEditor;
